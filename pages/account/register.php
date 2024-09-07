<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';
include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';

// Functie om een JSON response te sturen
function sendResponse($status, $message = '') {
    echo json_encode(['status' => $status, 'message' => $message]);
    exit();
}

// Controleer of het formulier is ingediend
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    // Verzamelen en ontsmetten van formuliergegevens
    $username = $conn->real_escape_string(trim($_POST['username']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basisvalidatie
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        sendResponse('error', 'All fields are required.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        sendResponse('error', 'Invalid email format.');
    }

    if ($password !== $confirm_password) {
        sendResponse('error', 'Passwords do not match.');
    }

    // Controleer of de gebruikersnaam of e-mail al bestaat
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? OR username = ?");
    $stmt->bind_param('ss', $email, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        sendResponse('error', 'Username or email already exists.');
    }

    $stmt->close();

    // Hash het wachtwoord
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Voeg de gebruiker toe aan de database
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, 'student')");
    $stmt->bind_param('sss', $username, $email, $hashed_password);

    if ($stmt->execute()) {
        sendResponse('success', 'Registration successful.');
    } else {
        sendResponse('error', 'Error: ' . $stmt->error);
    }

    $stmt->close();
}
?>


<div class="container">
    <h2>Register</h2>
    <form action="register.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" name="register">Register</button>
    </form>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
?>
