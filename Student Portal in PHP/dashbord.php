<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard| BZU Multan</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords" content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css"  rel="stylesheet">

  
</head>
<body>
 <!-- Header with no nav bar  -->
  <?php require_once 'no_nav_header.php';?>
    <!-- Dashboard Content -->
 <div class="container mt-4">
    <h1 class="text-center text-title mb-10"><strong><b>Welcome to Your<br>STUDENT PORTAL</b></strong></h1>
        
 <div class="row g-12">
    <!-- University Card-->
        <div class="col-md-13 mb-4">
            <div class="admin-card p-4">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                            <i class="fa-solid fa-building text-white fa-3x"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h3 class="pixelated-font">About University</h3>
                        <h2 class="text-info"><strong>Bahauddin Zakariya University, Multan</strong></h2>
                        <p class="mb-2">Pakistan's Leading University</p>
                        <a href="#bzuCollapse" class="btn btn-custom" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="bzuCollapse">
                            View More <i class="fas fa-chevron-down ms-2"></i>
                        </a>
                    </div>
                </div>
                <!-- Dropdown Menu -->
                <div class="collapse mt-3" id="bzuCollapse">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <?php if(isset($_SESSION["user"])) : ?>
                                                    <a href="views/uni-vision-mission.php" class="dropdown-item">
                                                       <i class="fa-solid fa-bullseye me-2"></i>
                                                        University Vision & Mission
                                                    </a>
                                <?PHP else : ?>     
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">
                                                        <i class="fa-solid fa-bullseye me-2"></i>
                                                        University Vision & Mission
                                            </a>
                                <?php endif; ?>                 
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    <!-- Department   Card  -->
    <div class="col-md-13 mb-4">
            <div class="admin-card p-4">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                            <i class="fa-solid fa-microchip text-white fa-3x"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h3 class="pixelated-font">About Department</h3>
                        <h2 class="text-info"><strong>Department of Computer Engineering</strong></h2>
                        <p class="mb-2">Shaping the future of Inovovation & Technology </p>
                        <a href="#cpeCollapse" class="btn btn-custom" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="bzuCollapse">
                            View More <i class="fas fa-chevron-down ms-2"></i>
                        </a>
                    </div>
                </div>
                <!-- Dropdown Menu -->
                <div class="collapse" id="cpeCollapse">
                    <div class="card-body">
                      <ul class="list-unstyled">
                        <li class="mb-2">
                            <?php if (isset($_SESSION["user"])) : ?>                 
                                    <a href="views/about-cpe.php" class="dropdown-item">
                                        <i class="fa-solid fa-info-circle me-2"></i>
                                        About CPE
                                    </a>
                            <?PHP else : ?>     
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">
                                        <i class="fa-solid fa-info-circle me-2"></i>
                                        About CPE
                                    </a>
                            <?php endif; ?> 
                        </li>
                        <li class="mb-2">
                            <?php if (isset($_SESSION["user"])) : ?>                           
                                    <a href="views/dep-vision-mission.php" class="dropdown-item">
                                        <i class="fa-solid fa-bullseye me-2"></i>
                                        Departmental Vision & Mission
                                    </a>
                            <?PHP else : ?>     
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">
                                    <i class="fa-solid fa-bullseye me-2"></i>
                                        Departmental Vision & Mission
                                    </a>
                                
                            <?php endif; ?> 
                        </li>
                        <li class="mb-2">
                                <?php if (isset($_SESSION["user"])) : ?>                           

                                    <a href="views/admistration.php" class="dropdown-item">
                                        <i class="fa-solid fa-users-gear me-2"></i>
                                        Administration
                                    </a>
                                <?PHP else : ?>     
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">
                                                <i class="fa-solid fa-users-gear me-2"></i>
                                                Administration
                                    </a>
                                <?php endif; ?> 
                        </li>
                       <li class="mb-2">
                            <?php if (isset($_SESSION["user"])) : ?>                           
                                <a href="views/faculty.php" class="dropdown-item">
                                        <i class="fa-solid fa-chalkboard-user me-2"></i>
                                        Faculty Members
                                </a>
                            <?PHP else : ?>     
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">
                                    <i class="fa-solid fa-chalkboard-user me-2"></i>
                                        Faculty Members
                                </a>
                            <?php endif; ?> 
                        </li>
                        <li class="mb-2">
                            <?php if (isset($_SESSION["user"])) : ?>                           
                            
                                    <a href="views/programs-offered.php" class="dropdown-item">
                                        <i class="fa-solid fa-graduation-cap me-2"></i>
                                        Programs Offered
                                    </a>
                            <?PHP else : ?>     
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">
                                                    <i class="fa-solid fa-graduation-cap me-2"></i>
                                                            Programs Offered
                                    </a>
                                <?php endif; ?> 
                        </li>
                      </ul>
                </div>
                </div>            
            </div>
    </div>

 <!-- Examination -->
 <div class="col-md-13 mb-4">
            <div class="admin-card p-4">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                            <i class="fa-solid fa-pen-nib text-white fa-3x"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h3 class="pixelated-font">Evaluation & Assessment</h3>
                        <h2 class="text-info"><strong>Exams & Results</strong></h2>
                        <p class="mb-2">Evaluating Future Engineers on PLOs & CLOs</p>
                        <a href="#examCollapse" class="btn btn-custom" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="bzuCollapse">
                            View More <i class="fas fa-chevron-down ms-2"></i>
                        </a>
                    </div>
                </div>
                <!-- Dropdown Menu -->
                <div class="collapse" id="examCollapse">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
        <?php if (isset($_SESSION["user"])) : ?>                           
                                      
                                        <a href="views/notification.php" class="dropdown-item">
                                            <i class="fa-solid fa-bell me-2"></i>
                                            Admission Schedule
                                        </a>
        <?PHP else : ?>     
                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">
                                    <i class="fa-solid fa-bell me-2"></i>
                                            Admission Schedule
                         </a>
         <?php endif; ?> 
                                    </li>
                                    <li class="mb-2">
        <?php if (isset($_SESSION["user"])) : ?>                           
                                       
                                        <a href="views/semSchedule.php" class="dropdown-item">
                                            <i class="fa-solid fa-calendar me-2"></i>
                                            Semester Schedule
                                            </a>
        <?PHP else : ?>     
                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">
                                  <i class="fa-solid fa-calendar me-2"></i>
                                            Semester Schedule
                                            </a>
         <?php endif; ?> 
                                    </li>
                                   
                                    <li class="mb-2">
        <?php if (isset($_SESSION["user"])) : ?>                           
                                    
                                        <a href="result.php" target="_blank" class="dropdown-item">
                                            <i class="fa-solid fa-trophy me-2"></i>
                                            All Examination Results
                                        </a>
        <?PHP else : ?>     
                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signupModal">
                                    <i class="fa-solid fa-trophy me-2"></i>
                                            All Examination Results
                                        </a>
         <?php endif; ?> 
                                    </li>
                                </ul>
                            </div>
                            </div>
                              </div>
        </div>

   </div>
   

<!-- Modal for sign-up prompt -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Access Denied</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center ">
                    <h3 class='pixelated-font mb-3'>Access Denied</h3>
                    <h2 class="text-info"><strong>You Don't Have Access to these Resources</strong></h2>
                    <p class=" mb-4">Please Sign up or Login to continue</p>
                    <div class="d-grid gap-2">
                        <a href="registration.php" class="btn btn-custom btn-lg">
                            <i class="fas fa-user-plus me-2"></i> Register Here
                        </a>
                        <a href="login.php" class="btn btn-custom btn-lg">
                            <i class="fas fa-sign-in-alt me-2"></i> Login
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php require_once 'footer.php'; ?>
</div>
</body>
</html>