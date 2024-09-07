<?php
// Start de sessie en include de header en database verbinding
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';

// Check of de gebruiker ingelogd is
if (!isset($_SESSION['user_id'])) {
    header('Location: /pages/account/login.php');
    exit();
}

// Set de pagetitel
$pagetitle = "My Courses";

// Haal de gebruikers ID op uit de sessie
$userId = $_SESSION['user_id'];

// Query om de cursussen op te halen waarvoor de gebruiker is ingeschreven
$sql = "
    SELECT c.id, c.title, c.description, c.thumbnail
    FROM courses c
    JOIN user_courses uc ON c.id = uc.course_id
    WHERE uc.user_id = ?
";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $userId);

// Controleer of de query succesvol is uitgevoerd
if ($stmt->execute()) {
    $result = $stmt->get_result();
} else {
    echo "<p class='text-danger'>Error retrieving courses: " . htmlspecialchars($stmt->error) . "</p>";
}

?>

<div class="container py-5">
    <h1 class="mb-4">My Courses</h1>

    <?php if ($result && $result->num_rows > 0): ?>
        <div class="row">
            <?php while ($course = $result->fetch_assoc()): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="<?php echo htmlspecialchars($course['thumbnail']); ?>" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($course['title']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($course['description']); ?></p>
                            <a href="/pages/course/details.php?id=<?php echo htmlspecialchars($course['id']); ?>" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p>You are not enrolled in any courses yet.</p>
        <a href="/pages/courses/browse.php" class="btn btn-secondary">Browse Courses</a>
    <?php endif; ?>
</div>

<?php
// Sluit de statement en database connectie af
$stmt->close();
$conn->close();

include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
?>
