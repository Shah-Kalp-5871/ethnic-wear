<?php

$dir = __DIR__ . '/resources/views/new';
$files = [
    $dir . '/home/index.blade.php',
    $dir . '/layouts/app.blade.php',
    $dir . '/partials/header.blade.php',
    $dir . '/partials/footer.blade.php',
];

$productsDir = __DIR__ . '/public/assets/products';
$images = array_diff(scandir($productsDir), array('.', '..'));
$images = array_values($images);
$imageCount = count($images);
$imageIndex = 0;

foreach ($files as $file) {
    if (!file_exists($file)) continue;

    $content = file_get_contents($file);

    // Replace product links
    $content = preg_replace('/href="https:\/\/saren\.pethemes\.com\/fashion-3\/product\/[^"]+"/', 'href="{{ route(\'new.product.show\') }}"', $content);
    
    // Replace category / other links with #
    $content = preg_replace('/href="https:\/\/saren\.pethemes\.com\/fashion-3\/[^"]*"/', 'href="#"', $content);

    // Handle hero slider images (home_slider_2.webp, etc)
    $content = preg_replace('/(src|data-src|srcset)="[^"]*home_slider_[^"]*"/', '$1="{{ asset(\'hero.jpg\') }}"', $content);
    $content = preg_replace('/(src|data-src|srcset)=\'([^\']*home_slider_[^\']*)\'/', '$1="{{ asset(\'hero.jpg\') }}"', $content);

    // Replace other images hosted on pethemes with product images
    $content = preg_replace_callback('/(src|data-src|srcset)="[^"]*saren\.pethemes\.com[^"]*(?:png|jpg|jpeg|webp)"/i', function($matches) use ($images, $imageCount, &$imageIndex) {
        $img = $images[$imageIndex % $imageCount];
        $imageIndex++;
        return $matches[1] . '="{{ asset(\'assets/products/' . $img . '\') }}"';
    }, $content);

    // Also remove srcset logic where it has multiple URLs by just letting the regex above handle the first occurrence and we can remove the rest, 
    // or just wipe out srcset entirely to simplify since it's local.
    $content = preg_replace('/srcset="[^"]*"/', 'srcset=""', $content);

    // Quick Formatting: Add newlines between tags, except inline ones if possible. 
    // Simple approach: replace >< with >\n<, and then indent properly.
    $content = str_replace('><', ">\n<", $content);
    
    file_put_contents($file, $content);
    echo "Updated $file\n";
}

// Add Route to web.php
$webPhp = file_get_contents(__DIR__ . '/routes/web.php');
if (strpos($webPhp, "Route::get('/product'") === false) {
    $routeCode = "
    Route::get('/product', function () {
        return view('new.product.show');
    })->name('new.product.show');
";
    $webPhp = preg_replace('/Route::prefix\(\'new\'\)->group\(function\s*\(\)\s*\{/', "Route::prefix('new')->group(function () {\n" . $routeCode, $webPhp);
    file_put_contents(__DIR__ . '/routes/web.php', $webPhp);
    echo "Updated web.php\n";
}
