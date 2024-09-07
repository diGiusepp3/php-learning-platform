<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';

// Initialize variables
$courseId = isset($_GET['course_id']) ? intval($_GET['course_id']) : 0;


// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $videoUrl = $_POST['video_url'];

    // Validate inputs
    if (empty($title) || empty($content)) {
        $errorMessage = 'Title and content are required.';
    } else {
        // Insert the lesson into the database
        $sql = "
            INSERT INTO lessons (course_id, title, content, video_url, created_at, updated_at)
            VALUES (?, ?, ?, ?, NOW(), NOW())
        ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('isss', $courseId, $title, $content, $videoUrl);

        if ($stmt->execute()) {
            $successMessage = 'Lesson created successfully.';
        } else {
            $errorMessage = 'Error creating lesson: ' . htmlspecialchars($stmt->error);
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the database connection
$conn->close();