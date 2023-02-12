<?php
session_start();
require_once('db.php');
if (!isset($_SESSION['db_id'])) {
    header('location: 404.php');
}
$id = $_SESSION['db_id'];
$default_img_query = "SELECT default_profile_photo FROM users WHERE id = '$id'";
$default_img = mysqli_query($db_connect, $default_img_query);
$default_img_assoc = mysqli_fetch_assoc($default_img);
$get_default_img = $default_img_assoc['default_profile_photo'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />


</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="profile.php">
                        <img src="uploads/profile_photo/<?=$get_default_img?>">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?= $_SESSION['db_name']; ?><br><span class="user-state-info"><?= $_SESSION['db_email']; ?></span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li <?php
                        $dashboard = "dashboard.php";
                        $after_explode = explode("/", $_SERVER['PHP_SELF']);
                        if (end($after_explode) == $dashboard) {
                        ?>
                        class="active-page"
                        <?php
                        }
                        ?>>
                        <a href="dashboard.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li <?php
                        $profile = "profile.php";
                        $after_explode = explode("/", $_SERVER['PHP_SELF']);
                        if (end($after_explode) == $profile) {
                        ?>
                        class="active-page"
                        <?php
                        }
                        ?>>
                        <a href="profile.php" class="active"><i class="material-icons-two-tone">face</i>Profile</a>
                    </li>
                    <li <?php
                        $banner = "banner.php";
                        $after_explode = explode("/", $_SERVER['PHP_SELF']);
                        if (end($after_explode) == $banner) {
                        ?>
                        class="active-page"
                        <?php
                        }
                        ?>>
                        <a href="banner.php" class="active"><i class="material-icons-two-tone">face</i>Banner</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">color_lens</i>About<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="add_education.php">Add Education</a>
                            </li>
                            <li>
                                <a href="view_education.php">View Education</a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a href="#"><i class="material-icons-two-tone">color_lens</i>Services<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="add_service.php">Add Service</a>
                            </li>
                            <li>
                                <a href="view_service.php">View Service</a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a href="#"><i class="material-icons-two-tone">color_lens</i>Recent Works<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="recent_work.php">Add Recent Work</a>
                            </li>
                            <li>
                                <a href="view_work.php">View Works</a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a href="#"><i class="material-icons-two-tone">color_lens</i>Fact Area<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu" style="display: none;">
                            <li>
                                <a href="fact_area.php">Add Fact</a>
                            </li>
                            <li>
                                <a href="view_fact.php">View Fact</a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a href="../index.php" class="active" target="_blank"><i class="material-icons-two-tone">face</i>Visit Site</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link active btn btn-primary text-white" href="signout.php">Sign Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>