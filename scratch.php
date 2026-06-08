<?php
$lines = file("resources/css/theme.css");
echo "LINE 41: " . substr($lines[40], 0, 500) . "\n";
echo "LINE 42: " . substr($lines[41], 0, 500) . "\n";
echo "LINE 43: " . substr($lines[42], 0, 1000) . "\n";
echo "LINE 44: " . substr($lines[43], 0, 500) . "\n";
