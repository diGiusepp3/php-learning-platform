<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';

// Check if the user is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: /pages/account/login.php');
    exit();
}

// Get the lesson ID from the query parameters
$lessonId = isset($_GET['lesson_id']) ? intval($_GET['lesson_id']) : 0;

// Fetch the lesson details to confirm it exists
$sql = "SELECT * FROM lessons WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $lessonId);
$stmt->execute();
$lesson = $stmt->get_result()->fetch_assoc();

if (!$lesson) {
    echo "Lesson not found.";
    exit();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
    <!-- Include your CSS here -->
</head>
<body>
<div class="container">
    <h1>Create Quiz for Lesson: <?php echo htmlspecialchars($lesson['title']); ?></h1>
    <form action="submit_quiz.php" method="post">
        <input type="hidden" name="lesson_id" value="<?php echo htmlspecialchars($lessonId); ?>">
        <div class="form-group">
            <label for="title">Quiz Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="questions">Questions (one per line):</label>
            <textarea id="questions" name="questions" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Quiz</button>
    </form>
</div>
<!-- Include your footer here -->
</body>
</html>
