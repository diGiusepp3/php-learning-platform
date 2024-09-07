<?php

// Start de sessie en include de header en database verbinding
session_start();
$pagetitle = "Course Details";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';
include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';

// Check of er een cursus ID is opgegeven in de URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<p class='text-danger'>Invalid course ID.</p>";
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
    exit();
}

// Haal de cursus ID op uit de URL
$courseId = intval($_GET['id']);

$thumbnailUrl = "https://learn.webmagic.be/img/courses/thumbnails/$courseId/thumbnail.png";

// Haal de cursusgegevens op uit de database
$sql = "
    SELECT title, description, thumbnail, instructor, duration, price
    FROM courses
    WHERE id = ?
";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $courseId);

// Controleer of de query succesvol is uitgevoerd
if ($stmt->execute()) {
    $result = $stmt->get_result();
    $course = $result->fetch_assoc();
} else {
    echo "<p class='text-danger'>Error retrieving course details: " . htmlspecialchars($stmt->error) . "</p>";
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
    exit();
}

// Controleer of de cursus bestaat
if (!$course) {
    echo "<p class='text-danger'>Course not found.</p>";
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
    exit();
}

// Haal de lessen op die bij deze cursus horen
$lessonsSql = "
    SELECT id, title, content, video_url
    FROM lessons
    WHERE course_id = ?
";
$lessonsStmt = $conn->prepare($lessonsSql);
$lessonsStmt->bind_param('i', $courseId);
$lessonsStmt->execute();
$lessonsResult = $lessonsStmt->get_result();

// Haal de quizzen op die bij de lessen van deze cursus horen
$quizzesSql = "
    SELECT q.id, q.title, l.title AS lesson_title
    FROM quizzes q
    JOIN lessons l ON q.lesson_id = l.id
    WHERE l.course_id = ?
";
$quizzesStmt = $conn->prepare($quizzesSql);
$quizzesStmt->bind_param('i', $courseId);
$quizzesStmt->execute();
$quizzesResult = $quizzesStmt->get_result();

echo "
<div class='container py-5'>
    <h1 class='mb-4'>" . htmlspecialchars($course['title']) . "</h1>
    <p>" . htmlspecialchars($course['description']) . "</p>
    <p><strong>Instructor:</strong> " . htmlspecialchars($course['instructor']) . "</p>
    <p><strong>Duration:</strong> " . htmlspecialchars($course['duration']) . " hours</p>
    <p><strong>Price:</strong> €" . htmlspecialchars($course['price']) . "</p>
    <img src='/img/courses/thumbnails/$courseId/" . htmlspecialchars($course['thumbnail']) . "' class='img-fluid' alt='Lesson Thumbnail'>
    
    <h2 class='mt-5'>Lessons</h2>";

if ($lessonsResult->num_rows > 0) {
    echo "<ul class='list-group mb-4'>";
    while ($lesson = $lessonsResult->fetch_assoc()) {
        echo "
        <li class='list-group-item'>
            <h5>" . htmlspecialchars($lesson['title']) . "</h5>
            <p>" . htmlspecialchars($lesson['content']) . "</p>";
        if (!empty($lesson['video_url'])) {
            echo "<a href='" . htmlspecialchars($lesson['video_url']) . "' target='_blank' class='btn btn-primary'>Watch Video</a>";
        }
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No lessons available for this course.</p>";
}

echo "
    <h2 class='mt-5'>Quizzes</h2>";

if ($quizzesResult->num_rows > 0) {
    echo "<ul class='list-group'>";
    while ($quiz = $quizzesResult->fetch_assoc()) {
        echo "
        <li class='list-group-item'>
            <h5>" . htmlspecialchars($quiz['title']) . "</h5>
            <p>Related Lesson: " . htmlspecialchars($quiz['lesson_title']) . "</p>
            <a href='/pages/course/take-quiz/index.php?id=" . htmlspecialchars($quiz['id']) . "' class='btn btn-secondary'>Take Quiz</a>
        </li>";
    }
    echo "</ul>";
} else {
    echo "<p>No quizzes available for this course.</p>";
}

echo "</div>";

// Sluit de statement en database connectie af
$stmt->close();
$lessonsStmt->close();
$quizzesStmt->close();
$conn->close();

include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
?>
