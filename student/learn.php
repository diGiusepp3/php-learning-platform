<?php
// Start de sessie en include de vereiste bestanden
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/includes/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';
include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';

// Controleer of een cursus-ID is opgegeven
if (!isset($_GET['course_id']) || !is_numeric($_GET['course_id'])) {
    echo "<p class='text-danger'>Invalid course ID.</p>";
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
    exit();
}

$courseId = intval($_GET['course_id']);

// Haal cursusgegevens op uit de database
$sql = "
    SELECT c.id, c.price, c.duration, c.instructor, c.student_count, c.rating, c.thumbnail, 
           ct.title, ct.description
    FROM courses c
    LEFT JOIN course_translations ct ON c.id = ct.course_id AND ct.lang = ?
    WHERE c.id = ?
";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $lang, $courseId);

if (!$stmt->execute()) {
    echo "<p class='text-danger'>Error retrieving course details: " . htmlspecialchars($stmt->error) . "</p>";
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
    exit();
}

$result = $stmt->get_result();
$course = $result->fetch_assoc();

if (!$course) {
    echo "<p class='text-danger'>Course not found.</p>";
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
    exit();
}

// Variabelen toewijzen
$course_title = $course['title'];
$course_description = $course['description'];
$course_price = $course['price'];
$course_duration = $course['duration'];
$course_instructor = $course['instructor'];
$course_students = $course['student_count'];
$course_rating = $course['rating'];
$course_thumbnail = $course['thumbnail'] ?? 'default-thumbnail.png';

// Start van de HTML-output
echo "
<div class='container-xxl py-5'>
    <div class='container'>
        <div class='text-center wow fadeInUp' data-wow-delay='0.1s'>
            <h1 class='mb-4'>" . htmlspecialchars($course_title) . "</h1>
            <img class='img-fluid mb-4' src='/img/courses/thumbnails/$courseId/$course_thumbnail' alt='" . htmlspecialchars($course_title) . "'>
            <h3 class='mb-3'>€" . htmlspecialchars($course_price) . "</h3>
            <div class='mb-3'>";

// Toon sterren op basis van de beoordeling
for ($i = 0; $i < 5; $i++) {
    echo $i < $course_rating ? "<small class='fa fa-star text-primary'></small>" : "<small class='fa fa-star text-secondary'></small>";
}

echo "
            <small>($course_students " . htmlspecialchars($translations['students']) . ")</small>
            </div>
            <p>" . htmlspecialchars($course_description) . "</p>
            <p><strong>" . htmlspecialchars($translations['learning_method']) . ":</strong> " . htmlspecialchars
    ($translations[$course_instructor]) . "</p>
            <p><strong>" . htmlspecialchars($translations['duration']) . ":</strong> " . htmlspecialchars($course_duration) . " " . htmlspecialchars($translations['hour']) . "</p>";

// Voeg de start knop toe als de gebruiker een student is
if (isset($_SESSION['userRole']) && $_SESSION['userRole'] === 'student') {
    $startButtonText = htmlspecialchars($translations['start']);
    echo "
            <a href='/student/dashboard.php?course_id=" . htmlspecialchars($courseId) . "lesson_id=' class='btn btn-primary mt-4'>
                " . $startButtonText . "
            </a>";
}

echo "
        </div>
    </div>
</div>
";

// Sluit de statement en database connectie af
$stmt->close();
$conn->close();

include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
?>
