<?php
global $conn;
session_start();

// Variabelen om foutmeldingen en succesberichten op te slaan
$error = '';
$success = '';

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';

// Verwerken van formulierverzending
if ($_SERVER['REQUEST_METHOD'] === 'POST' & (isset($_POST['inloggen']))) {
    require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

    // Verkrijg gebruikersinvoer
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // SQL-query om de gebruiker te vinden
    $sql = "SELECT * FROM users WHERE username = ? AND hashed_password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    // Controleer of er een resultaat is
    if ($result->num_rows === 1) {
        // Start een sessie en sla inlogstatus op
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user;
        $success = "Login succesfull! We  will redirect you to your dashboard.";
        header("refresh:2;url=dashboard.php");
    } else {
        $error = "Ongeldige gebruikersnaam of wachtwoord.";
    }

    // Sluit de verbinding
    $stmt->close();
    $conn->close();
}
?>


<div class="login-container">
    <h1>Login</h1>
    <?php if ($error): ?>
        <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <?php if ($success): ?>
        <p class="success"><?php echo htmlspecialchars($success); ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register">Register</a></p>
</div>


<?php
include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
?>
