<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location: ../dashbord.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Department of Computer Engineering | BZU Multan</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Meet the cyberpunk-inspired administration team of the Department of Computer Engineering at BZU Multan. Powered by code, driven by innovation.">
    <meta name="keywords" content="BZU Computer Engineering, Department Head, Tech Leaders, Digital Innovation">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
     <link href="../assets/css/style.css" rel="stylesheet">
    
</head>

<body>
    <!-- Header section with dark text -->
   <?php require_once '../header.php';?>

    <div class="container mt-4">
    <h1 class="text-center text-title mb-10"><strong><b>Administration Panel</b></strong></h1>

        <!-- Administration content here -->
        <div class="row g-4">

            <!-- Department Head -->
            <div class="col-md-12 mb-4">
                <div class="footer-card p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 100px; height: 100px;">
                                <i class="fas fa-user-shield fa-3x"></i>
                            </div>
                        </div>
                        <div class="col-md-10 ">
                            <h5 class="text-alert"><b>Head Of Department</b></h5><br>
                            <h2 class="text-info ">Dr. Muhammad Imran Malik</h2>
                            <p class="mb-2">Associate Professor</p><br>
                            <a href="#" class="btn btn-custom">View Profile <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Administrators -->
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <div class="developer-theme rounded-circle mb-3 d-flex align-items-center justify-content-center"
                        style="width: 60px; height: 60px;">
                        <i class="fas fa-user-graduate fa-2x"></i>
                    </div>
                    <h5 class="text-alert"><b>Student Advisor</b></h5><br>
                    <h2 class="text-info">Dr. Umer Chaudhary</h2>
                    <p>Assistant Professor</p><br>
                    <a href="#" class="btn btn-custom mt-2">View Profile <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <div class="developer-theme rounded-circle mb-3 d-flex align-items-center justify-content-center"
                        style="width: 60px; height: 60px;">
                        <i class="fas fa-clipboard-check fa-2x"></i>
                    </div>
                    <h5 class="text-alert"><b>Examination Incharge</b></h5><br>
                    <h2 class="text-info">Dr. Waqar Ashraf</h4>
                    <p>Assistant Professor</p><br>
                    <a href="https://www.linkedin.com/in/dr-waqar-ashraf-khan-042032165/"
                        class="btn btn-custom mt-2">View Profile <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    <!-- Quick Links -->
    <!-- Footer -->
    <?php require_once '../footer.php';?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>