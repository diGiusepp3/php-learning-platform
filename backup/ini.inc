<?php

// Error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Verbindingsinstellingen voor de database
$servername = "webmagic.be";
$username = "webmagic";
$password = "DigiuSeppe2018___";
$dbname = "webmagiclearn_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
