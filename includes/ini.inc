<?php

// Foutopsporingsinstellingen
error_reporting(E_ALL);
ini_set('display_errors', true);

// Database-instellingen
$database  = "webmagiclearn_db";
$username = "matthias";
$password = "DigiuSeppe2018___";
$host = "localhost";

// Maak verbinding met de database
$conn = new mysqli($host, $username, $password, $database);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verkrijg de taal uit de URL, cookie of standaard op basis van geolocatie
$lang = $_GET['lang'] ?? $_COOKIE['webcrafters_lang'] ?? null;

if (!$lang) {
    // IP Geolocatie API aanroepen
    $ip = $_SERVER['REMOTE_ADDR']; // Verkrijg IP-adres van gebruiker
    $api_url = "https://ipinfo.io/{$ip}/json"; // IPinfo API URL
    $response = @file_get_contents($api_url); // Voeg @ toe om foutmeldingen te onderdrukken
    $data = json_decode($response, true);

    // Voorbeeld: Zet taal op basis van landcode
    $country_code = $data['country'] ?? 'US';
    $lang = ($country_code === 'NL') ? 'nl' : 'en';
}

// Stel een cookie in met de taalvoorkeur indien nodig
if (!isset($_COOKIE['webcrafters_lang']) || $_COOKIE['webcrafters_lang'] !== $lang) {
    setcookie('webcrafters_lang', $lang, time() + (86400 * 30), '/'); // Cookie vervalt na 30 dagen
}

// Bepaal het taalbestand
$lang_file = $_SERVER['DOCUMENT_ROOT'] . '/languages/' . $lang . '.php';

// Laad de vertalingen op basis van de taalinstellingen
if (file_exists($lang_file)) {
    $translations = include($lang_file);
} else {
    $translations = include $_SERVER['DOCUMENT_ROOT'] . '/languages/en.php'; // Fallback naar Engels
}

// Verkrijg de huidige queryparameters behalve de taal
$query_params = $_GET;
unset($query_params['lang']);
$query_string = http_build_query($query_params);

// Stel de locale-instellingen in op basis van de geselecteerde taal
setlocale(LC_ALL, $lang == 'nl' ? 'nl_NL.UTF-8' : 'en_US.UTF-8');

// Controleer of de locale instelling correct is toegepast
if (false === setlocale(LC_ALL, 0)) {
    echo "Locale instelling niet beschikbaar.";
}

?>
