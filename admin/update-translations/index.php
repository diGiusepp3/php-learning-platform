<?php

// Functie om alle PHP-bestanden recursief in een directory te vinden
function getPhpFiles($directory) {
    $files = [];
    $dir = new RecursiveDirectoryIterator($directory);
    $iterator = new RecursiveIteratorIterator($dir);

    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $files[] = $file->getPathname();
        }
    }

    return $files;
}

// Bestandslocaties
$directory = $_SERVER['DOCUMENT_ROOT']; // Basisdirectory, vervang dit indien nodig
$files = getPhpFiles($directory);
$translations = [];

// Verzamel alle vertalingssleutels
foreach ($files as $file) {
    $content = file_get_contents($file);

    preg_match_all('/\$\btranslations\[\s*\'(.*?)\'\s*\]/', $content, $matches);

    foreach ($matches[1] as $key) {
        if (!array_key_exists($key, $translations)) {
            $translations[$key] = ''; // Voeg hier logica toe om automatisch vertalingen te genereren of gebruikersinput te vragen
        }
    }
}

// Laad de vertaalbestanden
$en_path = $_SERVER['DOCUMENT_ROOT'] . '/languages/en.php';
$nl_path = $_SERVER['DOCUMENT_ROOT'] . '/languages/nl.php';

$en = include $en_path;
$nl = include $nl_path;

// Toon gescande bestanden en vertalingssleutels
echo "<h2>Gescande Bestanden:</h2>";
echo "<ul>";
foreach ($files as $file) {
    echo "<li>" . htmlspecialchars($file) . "</li>";
}
echo "</ul>";

echo "<h2>Toegevoegde Vertalingen:</h2>";
echo "<ul>";
foreach ($translations as $key => $value) {
    echo "<li><strong>{$key}:</strong> {$value}</li>";
}
echo "</ul>";

// Update vertaalbestanden
$updated_en = array_merge($en, $translations);
$updated_nl = array_merge($nl, $translations);

// Sla de bijgewerkte vertalingen op
file_put_contents($en_path, '<?php return ' . var_export($updated_en, true) . '; ?>');
file_put_contents($nl_path, '<?php return ' . var_export($updated_nl, true) . '; ?>');

echo "Translations updated successfully.";

?>
