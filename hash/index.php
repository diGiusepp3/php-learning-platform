<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';



    // Wachtwoord dat je wilt hashen
    $password = 'tester2';

    // Wachtwoord hashen met bcrypt
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Toon de hash
    echo "De hash van het wachtwoord is: " . $hashedPassword;



