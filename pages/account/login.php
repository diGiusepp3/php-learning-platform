<?php
include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>

<h1>Login</h1>
<div id="error-message"></div>
<form id="login-form">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Login</button>
</form>
<p>Don't have an account? <a href="/pages/account/register.php">Register here</a></p>

<script>
    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(this);
        formData.append('login', true);

        fetch('/includes/auth.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    window.location.href = '/';
                } else {
                    document.getElementById('error-message').innerText = data.message;
                }
            })
            .catch(error => console.error('Error:', error));
    });
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
?>
