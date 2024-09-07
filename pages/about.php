<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/home/services.php';
?>


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="/img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class='col-lg-6 wow fadeInUp' data-wow-delay='0.3s'>
                    <h6 class='section-title bg-white text-start text-primary pe-3'><?php echo htmlspecialchars($translations['about_us_section_title']); ?></h6>
                    <h1 class='mb-4'><?php echo htmlspecialchars($translations['about_us_heading']); ?></h1>
                    <p class='mb-4'><?php echo htmlspecialchars($translations['about_us_paragraph_1']); ?></p>
                    <p class='mb-4'><?php echo htmlspecialchars($translations['about_us_paragraph_2']); ?></p>
                    <div class='row gy-2 gx-4 mb-4'>
                        <div class='col-sm-6'>
                            <p class='mb-0'><i class='fa fa-arrow-right text-primary me-2'></i><?php echo htmlspecialchars($translations['about_us_feature_1']); ?></p>
                        </div>
                        <div class='col-sm-6'>
                            <p class='mb-0'><i class='fa fa-arrow-right text-primary me-2'></i><?php echo htmlspecialchars($translations['about_us_feature_2']); ?></p>
                        </div>
                        <div class='col-sm-6'>
                            <p class='mb-0'><i class='fa fa-arrow-right text-primary me-2'></i><?php echo htmlspecialchars($translations['about_us_feature_3']); ?></p>
                        </div>
                        <div class='col-sm-6'>
                            <p class='mb-0'><i class='fa fa-arrow-right text-primary me-2'></i><?php echo htmlspecialchars($translations['about_us_feature_4']); ?></p>
                        </div>
                        <div class='col-sm-6'>
                            <p class='mb-0'><i class='fa fa-arrow-right text-primary me-2'></i><?php echo htmlspecialchars($translations['about_us_feature_5']); ?></p>
                        </div>
                        <div class='col-sm-6'>
                            <p class='mb-0'><i class='fa fa-arrow-right text-primary me-2'></i><?php echo htmlspecialchars($translations['about_us_feature_6']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


<?php
include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
