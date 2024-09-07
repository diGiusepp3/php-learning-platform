<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; // Zorg ervoor dat je functions.php include
include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';

// Bescherm specifieke content voor admins
if (isAdmin()) {
    echo "<p>Welcome, Admin! Here is your admin content.</p>";
}

// Toon gebruikersnaam of een gastbericht
?>




    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <?php echo "<p class='text-white'>Hello, " . getUsername() . "!</p>"; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/course-categories.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/courses.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/testimonials.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
?>