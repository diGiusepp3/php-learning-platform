<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';

// Check if the user is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: /pages/account/login.php');
    exit();
}

// Get form data
$lessonId = isset($_POST['lesson_id']) ? intval($_POST['lesson_id']) : 0;
$title = isset($_POST['title']) ? trim($_POST['title']) : '';
$questions = isset($_POST['questions']) ? trim($_POST['questions']) : '';

// Validate input
if (empty($title) || empty($questions)) {
    echo "All fields are required.";
    exit();
}

// Insert the quiz into the database
$sql = "INSERT INTO quizzes (lesson_id, title, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
$stmt = $conn->prepare($sql);
$stmt->bind_param('is', $lessonId, $title);
$stmt->execute();

$quizId = $stmt->insert_id;

// Insert questions
$questionsArray = explode("\n", $questions);
$sql = "INSERT INTO quiz_questions (quiz_id, question) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
foreach ($questionsArray as $question) {
    $question = trim($question);
    if (!empty($question)) {
        $stmt->bind_param('is', $quizId, $question);
        $stmt->execute();
    }
}

// Close the database connection
$stmt->close();
$conn->close();

header('Location: /pages/quiz/view.php?id=' . $quizId);
exit();
