<?php

session_start();
$pagetitle = "Browse Courses";
include $_SERVER['DOCUMENT_ROOT'].'/includes/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';
include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';

include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/courses.php';

include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
?>
