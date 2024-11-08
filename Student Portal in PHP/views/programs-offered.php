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
    <title>Programs Offered - Department of Computer Engineering | BZU Multan</title>

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
    <h1 class="text-center text-title mb-10"><strong><b>Programs Offered by <br>Department of Computer Engineering</b></strong></h1>

    <!-- B.Sc. Computer Engineering -->
    <div class="row g-4">
        <div class="col-md-12">
            <div class="admin-card p-4">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center" style="width: 100px; height: 100px" >
                            <i class="fas fa-graduation-cap fa-5x"></i>
                        </div>
                    </div>
                    <div class="col-md-5" align="center">
                        <h1 class="text-highlight">B.Sc. Computer Engineering</h1>
                        <p class="mb-2 text-center" >Undergraduate Program</p>
                    </div>   
                        <div class="col-md-13">
                        <br><h3 class="text-info">Eligibility:</h3><br>
                        <p class="mb-2">
                            An applicant for admission to any of the B.Sc. Engineering Degree Program offered by the University must fulfill the following requirements:<br><br> 
                            a) He should have obtained at least <b>60% marks in</b> examination on the basis of which he seeks admission.<br>
                            Marks for Hafz- e-Quran and entry test where applicable shall be added only for determination of merit. <br><br>
                            b) He should be a bonafide resident of the area from where he seeks admission.<br><br>
                            c) He should meet standards of physique and eye-sight laid down in the medical certificate.<br><br> 
                            d) He must have appeared in the Entry Test for Session 2022 arranged by the University of Engineering & Technology Lahore, Pakistan or BZU Test for Session 2023
                        </p><br>
                        <h3 class="text-info">Merit Determination:</h3><br>
                        <p class="mb-2">
                            The comparative merit of applicants will be determined on the basis of adjusted admission marks obtained by them in the above examinations.<br><br> 
                            A) For applicant with H.S.S.C. (Pre Engineering Part-1) as the highest qualification:<br><br> 
                            i) H.S.S.C. (Pre Engineering Part-I) or equivalent including Hifz-e- Quran marks. 70% <br><br>
                            ii) Entry Test marks 30% <br><br>
                            B) For applicants with B.Sc. as the highest qualification<br><br> 
                            i) B.Sc. Marks 35% ii) H.S.S.C. or equivalent exam including Hifz-e-Quran marks. 35%<br><br> 
                            iii) Entry Test Marks 30% <br><br>
                            C) For Applicants having Diploma of Associate Engineer as the Highest Qualification <br><br>
                            i) Diploma of Associate Engineer including Hifz-e-Quran marks 70% <br><br>
                            ii) Entry Test Marks 30% Criteria may be changed as per approval from online academic committee BZU or further guidelines provided by Honourable Court or PEC on later stage
                        </p>
                        <br>
                        <a href="#" class="btn btn-custom mt-3 align-items-center justify-content-center" style="width: 1000px; height: 50px">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- M.Sc. Computer Engineering -->
    <div class="row g-4 mt-4">
        <div class="col-md-12">
            <div class="admin-card p-4">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                            <i class="fas fa-graduation-cap fa-5x"></i>
                        </div>
                    </div>
                    <div class="col-md-5" align="center">
                        <h1 class="text-highlight ">M.Sc. Computer Engineering</h1>
                        <p class="mb-2 text-center">Graduate (MS) Program</p>
                    </div>
                        <div class="col-md-13 " >
                       <br> <h3 class="text-info">Eligibility:</h3> <br><br>
                        <p class="mb-2">
                            1. Four years BS/BE/BSc.Degree in Computer Engineering, Software Engineering, Electronics Engineering, Computer Systems Engineering, Telecommunication Engineering and Electrical Engineering with specialization in Computer/Electronics.
                        </p>
                        <p>
                            2. The applicant should have obtained at least 60% marks under Annual/Term system or CGPA 2.50 on the scale of 4.00 or equivalent marks in relevant undergraduate degree on the basis of which he/she seeks admission.
                        </p>
                        <p>
                            3. The applicant should have secured at least 50% marks in an Entry Test conducted by the department or GAT general.
                        </p>
                        <br><h3 class="text-info">Merit Determination:</h3><br>
                        <p class="mb-2">
                            Admissions for M.Sc. Computer Engineering will be carried out as per the university policy.
                        </p>
                        <br>
                        <a href="#" class="btn btn-custom mt-3 align-items-center justify-content-center" style="width: 1000px; height: 50px">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
 
 <!-- Quick Links & Footer-->
 <?php include_once '../footer.php'; ?>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>