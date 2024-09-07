<?php

session_set_cookie_params([
    'lifetime' => 86400,
    'path' => '/',
    'domain' => 'learn.webmagic.be',
    'secure' => true,
    'httponly' => false,
    'samesite' => 'Strict',
]);

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';

header('Content-Type: application/json');


function sendResponse($status, $message = '') {
    echo json_encode(['status' => $status, 'message' => $message]);
    exit();
}

// Register User
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $username, $email, $password);

    if ($stmt->execute()) {
        sendResponse('success', 'Registration successful.');
    } else {
        sendResponse('error', 'Error: ' . $stmt->error);
    }
    $stmt->close();
}

// Login User
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['userRole'] = $user['role'];
        sendResponse('success', 'Login successful.');
    } else {
        sendResponse('error', 'Invalid credentials!');
    }
    $stmt->close();
}

