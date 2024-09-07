<?php
//$pageTitle = "Webmagic - Your platform for learning coding";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="seobility" content="4302ac08d9f0858ee1ab9f8af1fe3196">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="translate">
    <title>Webmagic <?php echo $pagetitle ?? "- Your platform for learning coding"; ?></title>
    <meta name="description" content="<?php echo $description ?? "Webmagic - Your platform for learning howto code";
    ?>">
    <link rel="icon" href="/backup/logo.svgogo.svg">
    <link href="/backup/csskup/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/backup/csskup/css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/backup/csskup/css/styles.css">
</head>
<body>
<header class="text-green text-center py-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo text-gradient-pink-blue h1"><a href="/" class="text-green"><i class="bi bi-magic"></i>WebMagic</a></div>
            <?php echo $navContent ?? '
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a href="#" class="nav-link text-green">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-green">Learning</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-green">Community</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-green">Tools</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-green">About Us</a></li>
                    </ul>
                </nav>
            ' ?>
            <div class="header-user-icon">
                <i class="bi bi-person"  onclick="goToLogin()"></i>
            </div>
        </div>
    </div>
</header>

<div class="hero">
    <!-- HERO CONTENT -->
    <?php echo $heroContent ?? '<div class="d-none p-0 m-0"></div>' ?>
</div>



