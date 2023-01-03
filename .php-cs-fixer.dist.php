<?php

use Jubeki\LaravelCodeStyle\Config;
use PhpCsFixer\Finder;

$base_path = dirname($path);

$files[] = '/vendor/autoload.php';
$files[] = '/bootstrap/app.php';

foreach ($files as $file) {
    $required = $base_path.$file;
    if (file_exists($required)) {
        require $required;
        break;
    }
}

return (new Config())
    ->setFinder(Finder::create())
    ->setRules([
        '@Laravel' => true,
        'braces' => true,
        'array_indentation' => true,
        'single_line_comment_style' => false,
    ]);
