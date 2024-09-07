<?php
$pagetitle = "Webmagic - Become a web-magician";
include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';

// Database connectie (aanpassen naar jouw configuratie)
include $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/hero.php';
?>


<section class="py-5">
    <div class="container">
        <h2>Why WebMagic?</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item1"><strong>Access Anytime, Anywhere:</strong> Whether you're at home,
                in the office, or on the go, WebMagic provides the tools and knowledge you need to move forward.</li>
            <li class="list-group-item1"><strong>Learn at Your Own Pace:</strong> No deadlines, no pressure. You
                decide when and how you learn. Explore new topics at your own pace.</li>
            <li class="list-group-item1"><strong>Free and Accessible:</strong> Access a wealth of free learning
                resources and tools. Learning doesn't have to be expensive, and at WebMagic, we ensure that knowledge is accessible to everyone.</li>
            <li class="list-group-item1"><strong>Community-Driven:</strong> Learn from and with others. Join our
                community of tech enthusiasts and share your knowledge, experiences, and questions.</li>
            <li class="list-group-item1"><strong>Progress with Practical Tools:</strong> In addition to theory,
                WebMagic offers tools and resources to help you apply your knowledge in practice.</li>
        </ul>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <h2>Expand Your Skills for Free</h2>
        <p>At WebMagic, we believe everyone should have the opportunity to grow. That's why we offer free access to valuable resources to help you develop your skills.</p>
        <ul class="list-unstyled">
            <li><a href="#" class="link-primary">Open Source Projects</a></li>
            <li><a href="#" class="link-primary">Tech Blogs & Articles</a></li>
        </ul>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2>What WebMagic Can Do for You</h2>
        <ul class="list-unstyled">
            <li><a href="#" class="link-primary">Free Lessons</a></li>
            <li><a href="#" class="link-primary">Tech Community</a></li>
            <li><a href="#" class="link-primary">Handy Tools</a></li>
            <li><a href="#" class="link-primary">Projects and Collaborations</a></li>
            <li><a href="#" class="link-primary">Current Tech Articles</a></li>
        </ul>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2>Available Courses</h2>

        <?php
        // Query om alle cursussen op te halen
        $sql = "SELECT * FROM courses";
        $result = $conn->query($sql);

        // Controleer of er resultaten zijn
        if ($result->num_rows > 0) {
            // Start een Bootstrap rij
            echo '<div class="row">';

            // Loop door de resultaten en maak cards
            while($row = $result->fetch_assoc()) { 
                ?>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="/images/courses/<?php echo $row["image"]; ?>" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["title"]; ?></h5>
                            <p class="card-text"><?php echo $row["description"]; ?></p>
                            <a href="<?php echo $row["link"]; ?>" class="btn btn-primary stretched-link">Learn More</a>
                        </div>
                    </div>
                </div>
                <?php
            }

            // Sluit de Bootstrap rij
            echo '</div>';
        } else {
            echo "No courses found.";
        }

        // Sluit de database connectie
        $conn->close();
        ?>
    </div>
</section>



<?php
include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
?>
