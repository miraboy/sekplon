<?php
$dir = __DIR__ . '/images';

$files = array_values(array_filter(scandir($dir), function($f) use ($dir) {
    return is_file($dir . '/' . $f) && strtolower(pathinfo($f, PATHINFO_EXTENSION)) === 'webp';
}));

// Mélange aléatoire
shuffle($files);

echo json_encode($files);
