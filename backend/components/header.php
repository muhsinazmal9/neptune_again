<?php
session_start();
if (!isset($_SESSION['select_email'])) {
    header('location: 404.php');
}
// universal database connection
require_once("../db_connect.php");

$s_id = $_SESSION['select_id'];
$select_dp = "SELECT profile_photo FROM users WHERE id = '$s_id'";
$select_dp_final = mysqli_query($db_connect, $select_dp);
$select_dp_assoc = mysqli_fetch_assoc($select_dp_final)['profile_photo'];

require_once('html_syn-head.php');
?>


<div class="app align-content-stretch d-flex flex-wrap">
    <div class="app-sidebar">
        <div class="logo">
            <a href="dashboard.php" class="logo-icon"><span class="logo-text">Neptune</span></a>
            <div class="sidebar-user-switcher user-activity-online">
                <a href="#">
                    <img src="./uploads/dp/<?=$select_dp_assoc?>" alt="<?=$select_dp_assoc?>">
                    <span class="activity-indicator"></span>
                    <span class="user-info-text">
                        <?php 
                        $name = $_SESSION['select_name'];
                        
                        if (strlen($name) <=10) {
                            echo $name;
                        } else {
                            echo substr($name, 0, 10).' ...';
                        }

                        ?><br>
                        <span class="user-state-info">
                            <?php 
                            $email = $_SESSION['select_email'];

                            if (strlen($email) <=12) {
                                echo $email;
                            } else {
                                echo substr($email, 0, 12).' ...';
                            }
                            ?>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="app-menu">
            <ul class="accordion-menu">
                <li class="sidebar-title">
                    Apps
                </li>
                <li>
                    <a href="dashboard.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                </li>
                <li>
                    <a href="users.php" class="active"><i class="material-icons-two-tone">group</i>Users</a>
                </li>
                <li>
                    <a href="profile.php" class="active"><i class="material-icons-two-tone">account_circle</i>Profile</a>
                </li>
                <li>
                    <a href=""><i class="material-icons-two-tone">home</i>Home Page<i
                            class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">Services<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="add_service.php">Add Service</a>
                                </li>
                                <li>
                                    <a href="view_service.php">View Service</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
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
                                <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                        class="material-icons">first_page</i></a>
                            </li>
                            <li class="nav-item dropdown hidden-on-mobile">
                                <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons">add</i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                    <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                    <li><a class="dropdown-item" href="#">New Board</a></li>
                                    <li><a class="dropdown-item" href="#">Create Project</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown hidden-on-mobile">
                                <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons-outlined">explore</i>
                                </a>
                                <ul class="dropdown-menu dropdown-lg large-items-menu"
                                    aria-labelledby="exploreDropdownLink">
                                    <li>
                                        <h6 class="dropdown-header">Repositories</h6>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <h5 class="dropdown-item-title">
                                                Neptune iOS
                                                <span class="badge badge-warning">1.0.2</span>
                                                <span class="hidden-helper-text">switch<i
                                                        class="material-icons">keyboard_arrow_right</i></span>
                                            </h5>
                                            <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of
                                                the printing and typesetting industry.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <h5 class="dropdown-item-title">
                                                Neptune Android
                                                <span class="badge badge-info">dev</span>
                                                <span class="hidden-helper-text">switch<i
                                                        class="material-icons">keyboard_arrow_right</i></span>
                                            </h5>
                                            <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of
                                                the printing and typesetting industry.</span>
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
                                <a class="nav-link active" href="#">Applications</a>
                            </li>
                            <li class="nav-item hidden-on-mobile">
                                <a class="nav-link" href="#">Reports</a>
                            </li>
                            <li class="nav-item hidden-on-mobile">
                                <a class="nav-link" href="#">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                            </li>
                            <li class="nav-item hidden-on-mobile">
                                <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown"
                                    data-bs-toggle="dropdown"><img src="./assets/images/flags/us.png" alt=""></a>
                                <ul class="dropdown-menu dropdown-menu-end language-dropdown"
                                    aria-labelledby="languageDropDown">
                                    <li><a class="dropdown-item" href="#"><img src="./assets/images/flags/germany.png"
                                                alt="">German</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="./assets/images/flags/italy.png"
                                                alt="">Italian</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="./assets/images/flags/china.png"
                                                alt="">Chinese</a></li>
                                </ul>
                            </li>
                            <li class="nav-item hidden-on-mobile">
                                <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#"
                                    data-bs-toggle="dropdown">4</a>
                                <div class="dropdown-menu dropdown-menu-end notifications-dropdown"
                                    aria-labelledby="notificationsDropDown">
                                    <h6 class="dropdown-header">Notifications</h6>
                                    <div class="notifications-dropdown-list">
                                        <a href="#">
                                            <div class="notifications-dropdown-item">
                                                <div class="notifications-dropdown-item-image">
                                                    <span class="notifications-badge bg-info text-white">
                                                        <i class="material-icons-outlined">campaign</i>
                                                    </span>
                                                </div>
                                                <div class="notifications-dropdown-item-text">
                                                    <p class="bold-notifications-text">Donec tempus nisi sed erat
                                                        vestibulum, eu suscipit ex laoreet</p>
                                                    <small>19:00</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notifications-dropdown-item">
                                                <div class="notifications-dropdown-item-image">
                                                    <span class="notifications-badge bg-danger text-white">
                                                        <i class="material-icons-outlined">bolt</i>
                                                    </span>
                                                </div>
                                                <div class="notifications-dropdown-item-text">
                                                    <p class="bold-notifications-text">Quisque ligula dui, tincidunt
                                                        nec
                                                        pharetra eu, fringilla quis mauris</p>
                                                    <small>18:00</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notifications-dropdown-item">
                                                <div class="notifications-dropdown-item-image">
                                                    <span class="notifications-badge bg-success text-white">
                                                        <i class="material-icons-outlined">alternate_email</i>
                                                    </span>
                                                </div>
                                                <div class="notifications-dropdown-item-text">
                                                    <p>Nulla id libero mattis justo euismod congue in et metus</p>
                                                    <small>yesterday</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notifications-dropdown-item">
                                                <div class="notifications-dropdown-item-image">
                                                    <span class="notifications-badge">
                                                        <img src="./assets/images/avatars/avatar.png" alt="">
                                                    </span>
                                                </div>
                                                <div class="notifications-dropdown-item-text">
                                                    <p>Praesent sodales lobortis velit ac pellentesque</p>
                                                    <small>yesterday</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notifications-dropdown-item">
                                                <div class="notifications-dropdown-item-image">
                                                    <span class="notifications-badge">
                                                        <img src="./assets/images/avatars/avatar.png" alt="">
                                                    </span>
                                                </div>
                                                <div class="notifications-dropdown-item-text">
                                                    <p>Praesent lacinia ante eget tristique mattis. Nam sollicitudin
                                                        velit sit amet auctor porta</p>
                                                    <small>yesterday</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="hidden-on-mobile">
                                <a href="log_in.php" class="btn btn-danger">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>