<?php
    session_start();
    //print_r($_SESSION);
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/carousel.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/services.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/about.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/course-categories.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/courses.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/testimonials.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
