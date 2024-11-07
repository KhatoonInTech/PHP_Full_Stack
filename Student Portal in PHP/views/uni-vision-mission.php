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
<?php require_once "../header.php"; ?>


    <div class="container mt-5">
    <h1 class="text-center text-highlight text-title mb-10"><strong><b>About University Vision & Mission</b></strong></h1>
        
        <div class="row g-4">
            <div class="col-md-12">
                <div class="admin-card p-4">
                    <h1 class=" text-highlight  mb-4">Our History</h1>
                    <p>Multan has always remained a centre of excellence in education. Hazrat Bahauddin Zakariya (1172 - 1262 A.D.), a Muslim religious scholar and saint, established a school of higher learning in theology in Multan; where scholars from all over the world came for studies and research.</p>
                    <p>The University of Multan was established in 1975 by an Act of the Punjab Legislative Assembly. To pay homage to the Great Saint, the name was changed from University of Multan to Bahauddin Zakariya University in 1979.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h2 class="text-info pixelated-font"><b>Our Objectives</b></h2><br>
                    <p>The main objective of the University is to provide facilities of higher education and research to the population of the Southern region of the Punjab.</p>
                    <p>The University fulfils three functions: teaching, affiliation and examination.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h2 class=" text-info pixelated-font"><b>Our Goals</b></h2><br>
                    <p>To be an internationally acclaimed University, recognized for excellence in teaching, research and outreach; provide the highest quality education to students, nurture their talent, promote intellectual growth and shape their personal development.</p>
                    <p>To enhance our reputation as a world-class teaching and research institution which is recognized for its innovation, excellence and discovery, and attracts the best students and staff.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h2 class=" text-info pixelated-font mb-4"><b>Our Vision</b></h2><br>
                    <p>Bahauddin Zakariya University, Multan as flagship Institution of the South Punjab imparts informed education at all levels of Undergraduate to PhD by diverse world-views and paradigms, grounded in diverse traditions and indigenous culture and heritage.</p>
                    <p>Make their Graduates leading luminaries with professional approach to preserve, disseminate and execute knowledge.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="admin-card p-4 h-80">
                    <h3 class=" text-info pixelated-font mb-4"><b>Our Mission</b></h3>
                    <p>To be an internationally acclaimed University, recognized for excellence in teaching, research and outreach; provide the highest quality education to students, nurture their talent, promote intellectual growth and shape their personal development.</p>
                    <p>To enhance our reputation as a world-class teaching and research institution which is recognized for its innovation, excellence and discovery, and attracts the best students and staff.</p>
                   
                </div>
            </div>

            <div class="col-md-12">
                <div class="admin-card p-4">
                    <h1 class=" text-highlight mb-4">Vice Chancellor's Message</h1>
                    <p>Thank you for choosing the Bahauddin Zakariya University for your academic pursuits. It is one of the nation's leading public research universities.
                    The university is widely known as an institution of strong performance and high ambition as it has continued to make excellent progress towards its goals.</p>
                    <p>I wish you best of luck for your admission plans! </p><br>
                    <h3 class="text-warning">Prof. Dr. Muhammad Zubair Iqbal</h3><br>
                    <a href="mailto:vc@bzu.edu.pk" class="btn btn-custom">Contact VC <i class="fas fa-arrow-right ms-2"></i></a>

                </div>
            </div>
        </div>
   
 
 <?php require_once "../footer.php"; ?>
 </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>