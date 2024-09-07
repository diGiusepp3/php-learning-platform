<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';

// Get quiz ID from query parameters
$quizId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch quiz details
$sql = "SELECT * FROM quizzes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $quizId);
$stmt->execute();
$quiz = $stmt->get_result()->fetch_assoc();

if (!$quiz) {
    echo "Quiz not found.";
    exit();
}

// Fetch questions
$sql = "SELECT * FROM quiz_questions WHERE quiz_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $quizId);
$stmt->execute();
$questions = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($quiz['title']); ?></title>
    <!-- Include your CSS here -->
</head>
<body>
<div class="container">
    <h1><?php echo htmlspecialchars($quiz['title']); ?></h1>
    <?php if ($questions): ?>
        <ul>
            <?php foreach ($questions as $question): ?>
                <li><?php echo htmlspecialchars($question['question']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No questions found for this quiz.</p>
    <?php endif; ?>
</div>
<!-- Include your footer here -->
</body>
</html>
