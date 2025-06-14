<?php
// En-têtes pour empêcher la mise en cache
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
header('Content-Type: application/json');

$dir = __DIR__ . '/images';

$files = array_values(array_filter(scandir($dir), function($f) use ($dir) {
    return is_file($dir . '/' . $f) && strtolower(pathinfo($f, PATHINFO_EXTENSION)) === 'webp';
}));

// Mélange aléatoire à chaque chargement
shuffle($files);

echo json_encode($files);
