<?php

// Base URL of your website
$base_url = "https://learn.webmagic.be/";

// Array to hold the URLs
$urls = [];

// Function to crawl a directory and add URLs to the array
function crawl_directory($dir, $base_url): void
{
    global $urls;
    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file == '.' || $file == '..') continue;

        $file_path = $dir . '/' . $file;

        if (is_dir($file_path)) {
            crawl_directory($file_path, $base_url);
        } else {
            $url = str_replace($_SERVER['DOCUMENT_ROOT'], $base_url, realpath($file_path));
            $urls[] = $url;
        }
    }
}

// Start crawling from the root directory
crawl_directory($_SERVER['DOCUMENT_ROOT'], $base_url);

// Generate XML
$sitemap = new SimpleXMLElement('<urlset/>');
$sitemap->addAttribute('xmlns', 'https://www.sitemaps.org/schemas/sitemap/0.9');

foreach ($urls as $url) {
    $url_element = $sitemap->addChild('url');
    $url_element->addChild('loc', htmlspecialchars($url));
    $url_element->addChild('lastmod', date('Y-m-d'));
    $url_element->addChild('changefreq', 'monthly');
    $url_element->addChild('priority', '0.5');
}

// Save XML to file
$sitemap_file = $_SERVER['DOCUMENT_ROOT'] . '/sitemap.xml';

if ($sitemap->asXML($sitemap_file)) {
    echo "Sitemap generated successfully at " . $sitemap_file;
} else {
    echo "Failed to generate sitemap. Check file permissions or directory path.";
}

// Check for specific file errors
if (!is_writable($sitemap_file)) {
    echo "File is not writable.";
} else {
    echo "File is writable.";
}
?>
