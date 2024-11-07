<?php
$in_views = strpos($_SERVER['PHP_SELF'], '/views/') !== false;

// Function to adjust link paths
function adjust_link($path) {
    global $in_views;
    return $in_views ? "../$path" : $path;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Department of Computer Engineering | BZU Multan</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords" content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
    @font-face {
    font-family: 'Pixelated';
    src: url('assets/small_pixel-7.ttf') format('truetype');
}

.pixelated-font {
    font-family: 'Pixelated', monospace;
}

.site-header {
    background: linear-gradient(
        to left,
        rgba(35, 178, 35, 0.9),
        rgba(253, 76, 11, 0.9)
    );
}

.navbar {
    background: linear-gradient(
        to right,
        rgba(35, 178, 35, 0.6),
        rgba(253, 76, 11, 0.8)
    );
}
.dropdown-menu{
    background: linear-gradient(
        to right,
        rgba(160, 239, 241, 0.6),
        rgba(240, 185, 165, 0.8)
    ); 
}
.dropdown-menu:hover{
    background: linear-gradient(
        to right,
        rgba(94, 246, 249, 1),
        rgba(245, 128, 85, 1)
    ); 
}
.navbar-dark .navbar-nav .nav-link  {
    color: #000000 !important;
    font-weight: bold;
}

.site-header h1, .site-header h2 {
    color: #000000;
    
            
            margin-top: 2rem;
            margin-bottom: 2rem;
            margin-left: auto;
            margin-right: auto;
            line-height: 0.9;
        
            text-shadow: 2px 1px 1px rgb(217, 222, 211);
}

h1, h2 {
            background-image: linear-gradient(to left, #44f703, #95ca03);
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            font-family: Impact, Courier, 'Arial Narrow Bold';
 }
 .text-highlight {
    font-size: 2rem;
    font-family: 'Franklin Gothic Medium', Haettenschweiler, 'Arial Narrow Bold', Arial, sans-serif;
    margin: 1.5rem 0;
    background: linear-gradient(to left,  #b6f703, #03caac);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-align: center;
}
.navbar-brand img {
    max-width: 130px;
}

.logout-btn {
    padding: 8px 20px;
    font-weight: bold;
    color: #1e1e1e;
    background-color: rgb(189, 130, 1);
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(125, 251, 255, 0.8);
}

.logout-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 6px rgba(220, 185, 8, 0.3);
}

@media (max-width: 768px) {
    .site-header h1 {
        font-size: 3.2rem;
    }
    
    .logout-btn {
        padding: 6px 12px;
        font-size: 1.9rem;
    }
}

/* Additional styles that might be needed */
.sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
}

.btn-custom {
    background-color: #c22311;
    border-color: #e74c3c;
    color: #f4f3ed;
}

.btn-custom:hover {
    background-color: #ae1c0c;
    border-color: #c0392b;
    color: #f4f3ed;
}
</style>
</head>
<body>
    <!-- Header section with dark text -->
    <header class="site-header sticky-top">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="#">
                   
                <img src="<?php echo adjust_link('assets/images/logo.png'); ?>" class="d-inline-block align-text-top logo img-fluid" alt="BZU Logo">
                </a>
                <h1 class=" bold mb-4 ms-3">
                    DEPARTMENT OF COMPUTER ENGINEERING<br>
                    Bahauddin Zakariya University, Multan
                </h1>
            </div>
            <a href="<?php echo adjust_link('logout.php'); ?>" class="btn btn-custom logout-btn">
                <i class="fas fa-sign-out-alt me-2"></i>Logout
            </a>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-0" id="navbar-main-header">
            <div class="container header-nav-container d-flex">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenuNavbar">
                    <span class="navbar-toggler-icon"></span>
                    Menu
                </button>
                  
                <div class="collapse navbar-collapse" id="mainMenuNavbar">
                    <ul class="navbar-nav fs-6 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo adjust_link('dashbord.php'); ?>">
                                <i class="fa-solid me-2 fa-address-card"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item has-dropdown-menu dropdown">
                            <a class="nav-link active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                <i class="fa-solid me-2 fa-address-card"></i>
                                About BZU
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="<?php echo adjust_link('views/uni-vision-mission.php'); ?>">University Vision & Mission</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-dropdown-menu dropdown">
                            <a class="nav-link active" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                <i class="fa-solid me-2 fa-address-card"></i>
                                About Department
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="<?php echo adjust_link('views/about-cpe.php'); ?>">About CPE</a></li>
                            <li><a class="dropdown-item" href="<?php echo adjust_link('views/dep-vision-mission.php'); ?>">Departmental Vision & Mission</a></li>
                            <li><a class="dropdown-item" href="<?php echo adjust_link('views/admistration.php'); ?>">Administration</a></li>
                            <li><a class="dropdown-item" href="<?php echo adjust_link('views/faculty.php'); ?>">Faculty Members</a></li>
                            <li><a class="dropdown-item" href="<?php echo adjust_link('views/programs-offered.php'); ?>">Programs Offered</a></li>
                        </ul>
                        </li>
                        <li class="nav-item has-dropdown-menu dropdown">
                            <a class="nav-link active" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                <i class="fa-solid me-2 fas fa-pen-nib"></i>
                                Exam & Results
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <li><a class="dropdown-item" href="<?php echo adjust_link('views/notification.php'); ?>">Admission Schedule</a></li>
                            <li><a class="dropdown-item" href="<?php echo adjust_link('views/semSchedule.php'); ?>">Semester Schedule</a></li>
                            <li><a class="dropdown-item" href="<?php echo adjust_link('result.php'); ?>" target="_blank">All Examination Results</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div> 
        </nav>
    </header>
<!-- js/bootstrap script for navbar -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>