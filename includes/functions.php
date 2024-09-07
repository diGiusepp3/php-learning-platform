<?php



function isAdmin() {
    return isset($_SESSION['userRole']) && $_SESSION['userRole'] === 'admin';
}

function isUser() {
    return isset($_SESSION['username']);
}

function getUsername() {
    return $_SESSION['username'] ?? 'Guest';
}

?>