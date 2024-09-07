<!DOCTYPE html>
<?php

?>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="utf-8">
    <title><?php if (isset($pagetitle)) {echo"$pagetitle";} else {echo "Learn with webmagic.be - e-Learning platform ";}?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/favicon.svg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/xml/xml.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.min.css" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="/img/logo/logo.png" class="img-fluid h-100">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active"><?php echo htmlspecialchars($translations['home']); ?></a>
            <a href="/pages/about.php" class="nav-item nav-link"><?php echo htmlspecialchars($translations['about']); ?></a>
            <a href="/pages/courses/" class="nav-item nav-link"><?php echo htmlspecialchars($translations['courses']); ?></a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo htmlspecialchars($translations['pages']); ?></a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="/pages/testimonial.php" class="dropdown-item"><?php echo htmlspecialchars($translations['testimonial']); ?></a>
                    <a href="/pages/404.php" class='dropdown-item'><?php echo htmlspecialchars($translations['404']); ?></a>
                </div>
            </div>
            <a href="/pages/contact.php" class='nav-item nav-link'><?php echo htmlspecialchars($translations['contact']); ?></a>
        </div>
        <!-- Language selector -->
        <form class="lang-form" method="GET" action="">
            <label for="lang">
                <img src="/img/icons/language.png" alt="Language Icon" class="lang-icon" style="height: 2em;">
            </label>
            <select style="background: none; border: none" id="lang" name="lang" onchange="this.form.submit()">
                <option style="background: none; border: none" value="en" <?php echo $lang === 'en' ? 'selected' : '';
                ?>>
                    <?php echo htmlspecialchars($translations['english']); ?>
                </option>
                <option value="nl" <?php echo $lang === 'nl' ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($translations['dutch']); ?>
                </option>
            </select>
        </form>
        <?php
        if (isset($_SESSION['username'])) {
            echo "<a href='/pages/account/dashboard/?lang=" . htmlspecialchars($lang) . "' class='btn btn-primary py-4 px-lg-5 d-none d-lg-block'>{$translations['my_courses']}<i class='fa fa-arrow-right ms-3'></i></a>";
        } else {
            echo "<a href='/pages/account/login.php?lang=" . htmlspecialchars($lang) . "' class='btn btn-primary py-4 px-lg-5 d-none d-lg-block'>{$translations['join_now']}<i class='fa fa-arrow-right ms-3'></i></a>";
        }
        ?>
    </div>
</nav>

<!-- Navbar End -->
