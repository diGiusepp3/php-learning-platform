<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>

<div class="container">
    <h2>Registration Form</h2>
    <form action="/backup/functionsnctions/account/register.php" method="POST">
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
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>

        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>

        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" name="city">
        </div>

        <div class="form-group">
            <label for="state">State:</label>
            <input type="text" id="state" name="state">
        </div>

        <div class="form-group">
            <label for="postal_code">Postal Code:</label>
            <input type="text" id="postal_code" name="postal_code">
        </div>

        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required>
        </div>

        <div class="form-group">
            <label for="profile_picture_url">Profile Picture URL (optional):</label>
            <input type="text" id="profile_picture_url" name="profile_picture_url">
        </div>

        <div class="form-group">
            <input type="submit" value="Register">
        </div>
    </form>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';

?>