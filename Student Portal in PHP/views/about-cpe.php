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
    <title>About CPE - Department of Computer Engineering | BZU Multan</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords" content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <!-- Header section with dark text -->
<?php include_once '../header.php'; ?>


    <div class="container mt-4">
    <h1 class="text-center text-title mb-10"><strong><b>About the Department of<br>Computer Engineering</b></strong></h1>
        <div class="row g-4">
            <div class="col-md-12">
                <div class="admin-card p-4">
                    <h2 class=" text-info mb-4">Our Journey</h2>
                    <p>Established in 2004 under the Faculty of Engineering and Technology, the Department of Computer Engineering at Bahauddin Zakariya University, Multan, has been at the forefront of technological education in Pakistan.</p>
                    <p>Our programs are accredited by the <a href="https://www.pec.org.pk/" target="_blank">Pakistan Engineering Council (PEC)</a>, ensuring world-class education standards.</p>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h3 class="text-info text-warning "><b>The Digital Revolution</b></h3>
                    <br><p>In this modern era, we've witnessed rapid developments in Computer Engineering, both in hardware and software. From home robotics to advanced operating systems, microprocessors, and supercomputers with massive computational capabilities, our field is ever-evolving.</p>
                    <a href="#" class="btn btn-custom mt-3">Explore Our Labs</a>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h3 class="text-info text-warning "><b>Our Impact</b></h2><br>
                    <p>Computer Engineers are the architects behind the technology we use daily. From personal computers and smartphones to robotics, we're responsible for designing and developing tools that enhance our lives and productivity.</p><br>
                    <a href="#" class="btn btn-custom mt-3">Meet Our Alumni</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="admin-card p-4 h-100" >
                    <h3 class="text-info text-warning"><b>Our Programs</b></h3>
                    <ul><br>
                        <li>B.Sc. in Computer Engineering</li>
                        <li>M.Sc. in Computer Engineering (MS Graduate Program)</li>
                        <li>Ph.D. in Computer Engineering (Coming Soon)</li>
                    </ul><p></p>
                    <a href="#" class="btn btn-custom mt-3">Apply Now</a>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="admin-card p-4">
                    <h3 class="text-info text-warning"><b>Our Facilities</b></h3><br>
                    <p>We provide state-of-the-art facilities to our students:</p>
                    <ul>
                        <li>Multimedia-equipped classrooms</li>
                        <li>Campus-wide WiFi</li>
                        <li>Well-equipped Computer laboratories</li>
                    </ul>
                    <a href="#" class="btn btn-custom mt-3">Virtual Tour</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="admin-card p-4">
                    <h3 class="text-info  mb-4">Our Specializations</h3><br>
                    <div class="row" align='center'>
                        <div class="col-md-5 mb-2">
                            <h4><i class="fas fa-microchip"></i> Integrated Circuits</h4>
                        </div>
                        <div class="col-md-5 mb-2">
                            <h4><i class="fas fa-cogs"></i> Embedded Systems</h4>
                        </div>
                        <div class="col-md-5 mb-2">
                            <h4><i class="fas fa-eye"></i> Computer Vision</h4>
                        </div>
                        <div class="col-md-5 mb-2">
                            <h4><i class="fas fa-server"></i> Computer Systems Architecture</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
 
 <!-- footer -->
  <?php include_once '../footer.php'; ?>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>