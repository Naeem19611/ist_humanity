<?php 
    include '../config/db_config.php';
    session_start();
    if(!isset($_SESSION['name']))
    {
        header('location: index.php');
    }
    // $sql_set = "SELECT * FROM setting";
    // $resut_set = mysqli_query($conn, $sql_set);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <title>Dashboard - Humanity</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="dashboard.php" class="logo">
                        <img src="assets/img/humanity-logow.png" style="height: 35px; width: auto;" alt=""> <span></span>
                    </a>
                </div>
                <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
                <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
                <ul class="nav user-menu float-right">
                    <li class="nav-item dropdown has-arrow">
                        <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                            <span class="user-img">
                                <img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
                                <span class="status online"></span>
                            </span>
                            <span>Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.php">My Profile</a>
                            <!--<a class="dropdown-item" href="edit-profile.php">Edit Profile</a>-->
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
                <div class="dropdown mobile-user-menu float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="settings.php">Settings</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>
                            <li class="active">
                                <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="general_settings.php"><i class="fa fa-paper-plane"></i><span>General Settings</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fa fa-users"></i> <span> Volunteer </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="add_volunteer.php">Add Volunteer</a></li>
                                    <li><a href="view_volunteer.php">All Volunteers</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fa fa-handshake-o"></i> <span> Project </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="add_project.php">Add Project</a></li>
                                    <li><a href="view_project.php">All Projects</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fa fa-clone"></i> <span> Department </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="add_department.php">Add Department</a></li>
                                    <li><a href="view_department.php">All Departments</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fa fa-user-md"></i> <span> Doctor </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="add_doctor.php">Add Doctor</a></li>
                                    <li><a href="view_doctor.php">All Doctors</a></li>
                                </ul>
                            </li>
                            <!-- <li class="submenu">
                                <a href="#"><i class="fa fa-comment"></i> <span> Notice </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="add_notice.php">Add Notice</a></li>
                                    <li><a href="view_notice.php">All Notice</a></li>
                                </ul>
                            </li> -->
                            <li class="submenu">
                                <a href="#"><i class="fa fa-briefcase"></i> <span> Career </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="add_job.php">Add Job Post</a></li>
                                    <li><a href="view_job.php">All Job Posts</a></li>
                                    <li><a href="view_job_application.php">All Application</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fa fa-image"></i> <span> Gallery </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="add_gallery.php">Add Gallery Item</a></li>
                                    <li><a href="view_gallery.php">All Gallery Item</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="view_message.php"><i class="fa fa-paper-plane"></i><span>Massages</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        