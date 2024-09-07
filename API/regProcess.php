<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);

require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

$host = 'localhost';          // Je database host

$db_name = 'game_database';   // Je database naam

$username = 'matthias';       // Je database gebruikersnaam

$password = 'DigiuSeppe2018___';  // Je database wachtwoord

// Verbinden met de database

$mysqli = new mysqli($host, $username, $password, $db_name);

// Controleer verbinding

if ($mysqli->connect_error) {

    echo json_encode(["error" => "Verbinding mislukt: " . $mysqli->connect_error]);

    exit;

}

function getRequestMethod() {

    return $_SERVER['REQUEST_METHOD'];

}

// Endpoint: Gebruiker Registreren

if (getRequestMethod() === 'POST' && isset($_GET['action']) && $_GET['action'] === 'register') {

    // Verkrijg de POST-gegevens

    $username = $_POST['username'] ?? null;

    $password = $_POST['password'] ?? null;

    // Valideer de invoer

    if (!empty($username) && !empty($password)) {

        $password = password_hash($password, PASSWORD_BCRYPT); // Wachtwoord veilig hash-en

        // Voorbereiden en uitvoeren van de SQL-query

        if ($stmt = $mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)")) {

            $stmt->bind_param("ss", $username, $password);

            if ($stmt->execute()) {

                echo json_encode(["message" => "Gebruiker geregistreerd"]);

            } else {

                echo json_encode(["error" => "Kon gebruiker niet registreren: " . $stmt->error]);

            }

            $stmt->close();

        } else {

            echo json_encode(["error" => "Fout bij voorbereiden van statement: " . $mysqli->error]);

        }

    } else {

        echo json_encode(["error" => "Ongeldige input: username en/of password ontbreekt of is leeg"]);

    }

    exit;

}

// Sluit de databaseverbinding

$mysqli->close();

?>