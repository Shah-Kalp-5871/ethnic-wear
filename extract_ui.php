<?php

$refFile = __DIR__ . '/resources/views/new/refrence/home.blade.php';
$html = file_get_contents($refFile);

// 1. Remove XML declarations that break PHP/Blade
$html = preg_replace('/<\?xml[^>]*\?>/', '', $html);

// 2. Download CSS
$cssUrlMatch = [];
if (preg_match('/<link\s+type="text\/css"\s+media="all"\s+href="([^"]+breeze_.*?\.css)"/', $html, $cssUrlMatch)) {
    $cssUrl = $cssUrlMatch[1];
    echo "Downloading CSS: $cssUrl\n";
    $cssContent = file_get_contents($cssUrl);
    if (!is_dir(__DIR__ . '/public/new/css')) {
        mkdir(__DIR__ . '/public/new/css', 0777, true);
    }
    file_put_contents(__DIR__ . '/public/new/css/theme.css', $cssContent);
    // Replace URL in HTML
    $html = str_replace($cssUrl, "{{ asset('new/css/theme.css') }}", $html);
}

// 3. Download JS
$jsUrlMatch = [];
if (preg_match('/<script\s+type="text\/javascript"\s+defer\s+src="([^"]+breeze_.*?\.js)"/', $html, $jsUrlMatch)) {
    $jsUrl = $jsUrlMatch[1];
    echo "Downloading JS: $jsUrl\n";
    $jsContent = file_get_contents($jsUrl);
    if (!is_dir(__DIR__ . '/public/new/js')) {
        mkdir(__DIR__ . '/public/new/js', 0777, true);
    }
    file_put_contents(__DIR__ . '/public/new/js/theme.js', $jsContent);
    // Replace URL in HTML
    $html = str_replace($jsUrl, "{{ asset('new/js/theme.js') }}", $html);
}

// 4. Extract Header
$headerMatch = [];
$header = '';
if (preg_match('/(<header\s+id="masthead".*?<\/header>)/s', $html, $headerMatch)) {
    $header = $headerMatch[1];
    // Create new partials dir
    if (!is_dir(__DIR__ . '/resources/views/new/partials')) {
        mkdir(__DIR__ . '/resources/views/new/partials', 0777, true);
    }
    file_put_contents(__DIR__ . '/resources/views/new/partials/header.blade.php', $header);
    $html = str_replace($header, "\n@include('new.partials.header')\n", $html);
}

// 5. Extract Footer
$footerMatch = [];
$footer = '';
if (preg_match('/(<footer\s+id="colophon".*?<\/footer>)/s', $html, $footerMatch)) {
    $footer = $footerMatch[1];
    file_put_contents(__DIR__ . '/resources/views/new/partials/footer.blade.php', $footer);
    $html = str_replace($footer, "\n@include('new.partials.footer')\n", $html);
}

// 6. Extract Main Content (Home Page)
$mainMatch = [];
$main = '';
if (preg_match('/(<main\s+id="primary".*?<\/main>)/s', $html, $mainMatch)) {
    $main = $mainMatch[1];
    if (!is_dir(__DIR__ . '/resources/views/new/home')) {
        mkdir(__DIR__ . '/resources/views/new/home', 0777, true);
    }
    
    $homeContent = "@extends('new.layouts.app')\n\n@section('content')\n" . $main . "\n@endsection\n";
    file_put_contents(__DIR__ . '/resources/views/new/home/index.blade.php', $homeContent);
    
    $html = str_replace($main, "\n@yield('content')\n", $html);
}

// 7. Write App Layout
if (!is_dir(__DIR__ . '/resources/views/new/layouts')) {
    mkdir(__DIR__ . '/resources/views/new/layouts', 0777, true);
}
file_put_contents(__DIR__ . '/resources/views/new/layouts/app.blade.php', $html);

echo "Extraction complete!\n";
