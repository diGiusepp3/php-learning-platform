<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

// Verwerk registratieformulier als het is verzonden
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Verkrijg gebruikersinvoer
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal_code = $_POST['postal_code'];
    $country = $_POST['country'];
    $profile_picture_url = $_POST['profile_picture_url'];
    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');
    $last_login = NULL; // Laat leeg bij registratie
    $is_active = 1; // Actief bij registratie
    $is_verified = 0; // Niet geverifieerd bij registratie
    $verification_token = bin2hex(random_bytes(50)); // Genereer een verificatietoken
    $failed_login_attempts = 0; // Initialiseer op 0
    $password_reset_token = NULL; // Geen token bij registratie
    $password_reset_expires_at = NULL; // Geen vervaldatum bij registratie

    // Has het wachtwoord
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL-query om een nieuwe gebruiker toe te voegen
    $sql = "INSERT INTO users (username, email, hashed_password, first_name, last_name, date_of_birth, gender, phone, address, city, state, postal_code, country, profile_picture_url, created_at, updated_at, last_login, is_active, is_verified, verification_token, failed_login_attempts, password_reset_token, password_reset_expires_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssssssssssssssssssss",
        $username, $email, $hashed_password, $first_name, $last_name, $date_of_birth, $gender, $phone, $address, $city, $state, $postal_code, $country, $profile_picture_url, $created_at, $updated_at, $last_login, $is_active, $is_verified, $verification_token, $failed_login_attempts, $password_reset_token, $password_reset_expires_at
    );


    if ($stmt->execute()) {
        echo "Registratie succesvol! Je ontvangt een bevestigingsmail met een verificatielink.";
       
    } else {
        echo "Er is een fout opgetreden: " . $stmt->error;
    }

    // Sluit de verbinding
    $stmt->close();
    $conn->close();
}
