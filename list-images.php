<?php
$dir = __DIR__ . '/images';

$files = array_values(array_filter(scandir($dir), function($f) use ($dir) {
    return is_file($dir . '/' . $f) && strtolower(pathinfo($f, PATHINFO_EXTENSION)) === 'webp';
}));

// Fonction pour extraire la date du nom au format JJMMAAAA ou JJMMAAAA_suffix.webp
function extractDateFromFilename($filename) {
    // Extrait la partie avant .webp (ex : "18052025" ou "18052025_1")
    $name = pathinfo($filename, PATHINFO_FILENAME);
    
    // On prend uniquement les 8 premiers caractères (JJMMAAAA)
    $datePart = substr($name, 0, 8);
    
    // Vérifier que ce sont bien des chiffres
    if (preg_match('/^\d{8}$/', $datePart)) {
        // Convertir en format AAAAMMJJ pour un tri lexicographique correct
        $day = substr($datePart, 0, 2);
        $month = substr($datePart, 2, 2);
        $year = substr($datePart, 4, 4);
        return $year . $month . $day;
    }
    return null; // Pas de date valide détectée
}

// Trier par date extraite décroissante (du plus récent au plus ancien)
usort($files, function($a, $b) {
    $dateA = extractDateFromFilename($a);
    $dateB = extractDateFromFilename($b);

    if ($dateA === $dateB) return 0;
    if ($dateA === null) return 1;  // Fichiers sans date vont en fin
    if ($dateB === null) return -1;
    return $dateB <=> $dateA; // ordre décroissant
});

echo json_encode($files);
