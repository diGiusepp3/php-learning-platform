<?php
    session_start();
    print_r($_SESSION);

    $pageTitle = 'Admin Dashboard';

    include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';

    if (!isset($_SESSION['username']) || $_SESSION['userRole'] !== 'admin') {
        header('Location: /pages/account/login.php');
        exit();
    }
?>

<div class="container-fluid">
    <!-- Sidebar -->
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/admin_dashboard.php">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin_users.php">
                            <i class="fas fa-users"></i> Users Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin_courses.php">
                            <i class="fas fa-book"></i> Courses Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin_categories.php">
                            <i class="fas fa-list"></i> Categories Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin_payments.php">
                            <i class="fas fa-credit-card"></i> Payments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin_reports.php">
                            <i class="fas fa-chart-bar"></i> Reports
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <!-- Dashboard Cards -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text">
                                <i class="fas fa-users fa-2x"></i>
                                <span class="float-end">150</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Courses</h5>
                            <p class="card-text">
                                <i class="fas fa-book fa-2x"></i>
                                <span class="float-end">75</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Earnings</h5>
                            <p class="card-text">
                                <i class="fas fa-euro-sign fa-2x"></i>
                                <span class="float-end">€12,500</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <h2 class="mt-4">Recent Activities</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Activity</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Enrolled in "Web Development"</td>
                        <td>2024-09-04</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Completed "Graphic Design Basics"</td>
                        <td>2024-09-03</td>
                    </tr>
                    <!-- Voeg meer activiteiten toe zoals nodig -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';

