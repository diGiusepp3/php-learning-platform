<?php

// De basisinstellingen
$base_url = "https://learn.webmagic.be"; // Het subdomein waarvan je de pagina's wilt crawlen
$sitemap_file = "sitemap.xml"; // De naam van het sitemap-bestand

// Functie om een pagina te crawlen en alle links te vinden
function crawlPage($url, $visited = []) {
    $visited[$url] = true; // Markeer de URL als bezocht
    $html = @file_get_contents($url); // Haal de inhoud van de URL op

    // Controleer of de inhoud kon worden opgehaald
    if ($html === FALSE) {
        return $visited;
    }

    // Zoek alle links met regex
    preg_match_all('/<a\s+href=["\'](.*?)["\']/', $html, $matches);

    // Verwerk de gevonden links
    foreach ($matches[1] as $link) {
        // Zorg ervoor dat de link begint met learn.webmagic.be en dat het geen externe link is
        if (strpos($link, $GLOBALS['base_url']) !== 0 && strpos($link, 'http') === 0) {
            continue;
        }

        // Voeg de basis-URL toe als de link relatief is
        if (strpos($link, '/') === 0) {
            $link = $GLOBALS['base_url'] . $link;
        } else {
            $link = rtrim($url, '/') . 'sitemap.php/' . $link;
        }

        // Als de link niet is bezocht, crawl hem dan
        if (!isset($visited[$link])) {
            $visited = crawlPage($link, $visited);
        }
    }

    return $visited;
}

// Start de crawling vanaf de basis-URL
$all_pages = crawlPage($base_url);

// XML-generatie starten
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

// Voeg elke pagina toe aan de XML
foreach (array_keys($all_pages) as $page) {
    $url = $xml->addChild('url');
    $url->addChild('loc', htmlspecialchars($page));
    $url->addChild('lastmod', date('Y-m-d')); // Datum van de laatste wijziging; kan dynamisch worden gemaakt
    $url->addChild('changefreq', 'weekly'); // Veranderfrequentie voor zoekmachines
    $url->addChild('priority', '0.8'); // Prioriteit voor zoekmachines
}

// Sla de XML op in een bestand
$xml->asXML($sitemap_file);

// Bevestigingsbericht weergeven
echo "Sitemap succesvol gegenereerd: <a href='$sitemap_file'>$sitemap_file</a>";

?>
