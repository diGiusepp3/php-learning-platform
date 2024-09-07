<?php
print_r($_SESSION);
// Haal de rol van de gebruiker op
$userRole = $_SESSION['userRole'] ?? 'guest';

// Haal cursussen op uit de database
$courseSql = "SELECT c.id, c.price, c.duration, c.instructor, c.student_count, c.rating, c.thumbnail, 
                    ct.title, ct.description 
             FROM `courses` c
             LEFT JOIN `course_translations` ct ON c.id = ct.course_id AND ct.lang = '$lang'
             ORDER BY c.id DESC LIMIT 3";
$result = $conn->query($courseSql);

echo "
<!-- Courses Start -->
<div class='container-xxl py-5'>
    <div class='container'>
        <div class='text-center wow fadeInUp' data-wow-delay='0.1s'>
            <h6 class='section-title bg-white text-center text-primary px-3'>{$translations['courses_section_title']}</h6>
            <h1 class='mb-5'>{$translations['courses_heading']}</h1>
        </div>
        <div class='row g-4 justify-content-center'>";

// Controleer of er resultaten zijn en gebruik een while loop om de gegevens weer te geven
if ($result->num_rows > 0) {
    while ($course = $result->fetch_assoc()) {
        // Variabelen toewijzen
        $course_id = $course['id'];
        $course_title = $course['title'];
        $course_price = $course['price'];
        $course_duration = $course['duration'];
        $course_instructor = $course['instructor'];
        $course_students = $course['student_count'];
        $course_rating = $course['rating'];
        $course_thumbnail = $course['thumbnail']; // Zorg dat de thumbnail naam correct is opgeslagen in de database

        // Bepaal de knoptekst en URL op basis van de rol van de gebruiker
        if ($userRole === 'guest') {
            $buttonText = $translations['join_now'];
            $buttonUrl = '/pages/account/register.php';
            $buttonClass = ''; // Geen extra klasse voor gasten
        } elseif ($userRole === 'admin') {
            $buttonText = $translations['edit_course'];
            $buttonUrl = "/admin/courses/edit/?id=$course_id";
            $buttonClass = ''; // Geen extra klasse voor admins
        } elseif ($userRole === 'student') {
            if ($course_price == 0) {
                $buttonText = $translations['start_learning'];
                $buttonUrl = "/student/add_course.php?id=$course_id"; // Pas aan op basis van je logica
                $buttonClass = 'addCourseButton'; // Klasse voor student-specifieke knop
            } else {
                $buttonText = $translations['join_now'];
                $buttonUrl = "/student/checkout.php?id=$course_id"; // Pas aan op basis van je logica
                $buttonClass = 'addCourseButton'; // Klasse voor student-specifieke knop
            }
        } else {
            $buttonText = $translations['join_now'];
            $buttonUrl = '/pages/account/register.php'; // Standaardwaarde voor onbekende rollen
            $buttonClass = ''; // Geen extra klasse voor andere rollen
        }

        echo "
        <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
            <div class='course-item bg-light'>
                <div class='position-relative overflow-hidden'>
                    <img class='img-fluid' src='/img/courses/thumbnails/$course_id/$course_thumbnail' alt=''>
                    <div class='w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4'>
                        <a href='/pages/course/details.php?id=$course_id' class='flex-shrink-0 btn btn-sm btn-primary px-3 border-end' style='border-radius: 30px 0 0 30px;'>{$translations['read_more']}</a>
                        <a data-course-id='$course_id' href='$buttonUrl' class='$buttonClass flex-shrink-0 btn btn-sm btn-primary px-3' style='border-radius: 0 30px 30px 0;'>$buttonText</a>
                       
                    </div>
                </div>
                <div class='resultMessage'></div>
                <div class='text-center p-4 pb-0'>
                    <h3 class='mb-0'>€$course_price</h3>
                    <div class='mb-3'>";

        // Toon sterren op basis van de beoordeling
        for ($i = 0; $i < 5; $i++) {
            if ($i < $course_rating) {
                echo "<small class='fa fa-star text-primary'></small>";
            } else {
                echo "<small class='fa fa-star text-secondary'></small>";
            }
        }

        echo "
                    <small>{$course_students}</small>
                </div>
                <h5 class='mb-4'>{$course_title}</h5>
            </div>
            </div>
            <div class='d-flex border-top'>
                <small class='flex-fill text-center border-end py-2'><i class='fa fa-user-tie text-primary me-2'></i>{$course_instructor}</small>
                <small class='flex-fill text-center border-end py-2'><i class='fa fa-clock text-primary me-2'></i>{$course_duration} {$translations['duration']}</small>
                <small class='flex-fill text-center py-2'><i class='fa fa-user text-primary me-2'></i>{$course_students} {$translations['students']}</small>
            </div>
        </div>
        ";
    }
} else {
    echo "<p>{$translations['no_courses']}</p>";
}

?>
        </div>
    </div>
</div>
<!-- Courses End -->
<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<script>
    $(document).ready(function() {
        $('.addCourseButton').on('click', function(event) {
            event.preventDefault(); // Voorkom standaard link-gedrag

            var courseId = $(this).data('course-id');
            var button = $(this);
            var resultMessage = button.closest('.course-item').find('.resultMessage');

            $.ajax({
                url: '/student/add_course.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    course_id: courseId
                },
                success: function(response) {
                    if (response.success) {
                        resultMessage.html('<p class="text-success">' + response.message + '</p>');
                        if (response.redirect) {
                            window.location.href = response.redirect;
                        }
                    } else {
                        resultMessage.html('<p class="text-danger">' + response.message + '</p>');
                    }
                },
                error: function() {
                    resultMessage.html('<p class="text-danger">An error occurred. Please try again.</p>');
                }
            });
        });
    });

</script>
<?php

// Sluit de verbinding met de database
$conn->close();
?>
