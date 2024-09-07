<?php
// Start de sessie en include de vereiste bestanden
session_start();

include $_SERVER['DOCUMENT_ROOT'].'/includes/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';

// Set content type to JSON
header('Content-Type: application/json');

// Initial response array
$response = array();

// Controleer of de gebruiker is ingelogd en de rol van de gebruiker ophalen
if (!isset($_SESSION['userRole']) || $_SESSION['userRole'] !== 'student') {
    $response['success'] = false;
    $response['message'] = 'You must be logged in as a student.';
    echo json_encode($response);
    exit();
}

// Controleer of er een cursus ID is opgegeven in de POST-data
if (!isset($_POST['course_id']) || !is_numeric($_POST['course_id'])) {
    $response['success'] = false;
    $response['message'] = 'Invalid course ID.';
    echo json_encode($response);
    exit();
}

// Haal de cursus ID op uit de POST-data
$courseId = intval($_POST['course_id']);

// Haal de cursusgegevens op uit de database
$sql = "SELECT price FROM courses WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $courseId);

// Controleer of de query succesvol is uitgevoerd
if (!$stmt->execute()) {
    $response['success'] = false;
    $response['message'] = 'Error retrieving course details: ' . htmlspecialchars($stmt->error);
    echo json_encode($response);
    exit();
}

$result = $stmt->get_result();
$course = $result->fetch_assoc();

// Controleer of de cursus bestaat
if (!$course) {
    $response['success'] = false;
    $response['message'] = 'Course not found.';
    echo json_encode($response);
    exit();
}

$coursePrice = $course['price'];
$studentId = $_SESSION['user_id'];
$value = '0';

// Voeg de cursus toe aan de student als de prijs 0 is
if ($coursePrice == 0) {
    $enrollSql = "INSERT INTO user_courses (user_id, course_id, progress) VALUES (?, ?, ?)";
    $enrollStmt = $conn->prepare($enrollSql);
    $enrollStmt->bind_param('iii', $studentId, $courseId, $value);

    if ($enrollStmt->execute()) {
        $response['success'] = true;
        $response['message'] = 'Course added successfully!';
        $response['redirect'] = '/student/learn.php?course_id=' . $courseId; // Geen redirect nodig
    } else {
        $response['success'] = false;
        $response['message'] = 'Error adding course: ' . htmlspecialchars($enrollStmt->error);
    }
    $enrollStmt->close();
} else {
    // Als de prijs niet 0 is, stuur door naar de betalingspagina
    $response['success'] = true;
    $response['message'] = 'Course added. Redirecting to payment page...';
    $response['redirect'] = '/pages/courses/payment.php?id=' . $courseId;
}

// Sluit de statement en database connectie af
$stmt->close();
$conn->close();

// Output the JSON response
echo json_encode($response);
?>
