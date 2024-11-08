<?php
$in_views = strpos($_SERVER['PHP_SELF'], '/views/') !== false;

// Function to adjust link paths

function adjust_links($path) {
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
    <meta name="description"
        content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords"
        content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
   
  
        .text-highlight {
            font-size: 2rem;
            font-family: 'Franklin Gothic Medium', Haettenschweiler, 'Arial Narrow Bold', Arial, sans-serif;
            margin: 1.5rem 0;
            background: linear-gradient(to left,  #44f703, #95ca03);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
        }
        .footer-card {
            background: linear-gradient(to right, rgba(82, 1, 47, 0.9), rgba(3, 39, 78, 0.9));
            box-shadow: 0 4px 8px rgba(15, 13, 13, 0.3);
            transition: all 0.3s ease;
            color: #f4f3ed;
            margin-left: 20px;
            margin-right: 10px;
            margin-bottom: -5px;
            margin-top: -5px;
        }

        .footer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(15, 13, 13, 0.5);
        }

        .btn-custom:hover  {
            background-color: #291003;
            border-color: #4ffcff;
            color: #f4f3ed;
        }

        .btn-custom{
            background-color: #791800;
            border-color: #ece939;
            color: #f4f3ed;
        }

        a {
            color: #94f000;
            text-decoration:double;
            align-items: center;
        }

        a:hover {
            text-decoration: wavy;
            color: #00cccc;
        }


        .site-bzu-footer {
            background: linear-gradient(to left,
            rgb(102, 170, 225,0.6),
            rgb(49, 198, 183,0.8));
        }

        .footer-section h3 {
            color: #00ffff;
            font-weight: 700;
            font-family: monospace;
        }

        .disclaimer-text {
            font-family: 'Roboto', sans-serif;
            color: #000000;
            font-size: 0.8rem;
            text-align: center;
            margin-top: 2rem;
            max-width: 500px;
            max-height:300px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1;
        }

        .disclaimer-text p {
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .btn-custom {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
<?php if(isset($_SESSION["user"])) : ?>
<footer class="site-bzu-footer py-5 text-white mt-5">
    
        <div class="container mt-4 ">
            <div class="row g-4">
                <div class="col-md-6 footer-section">

                    <div class="footer-card p-4 footer-section">
                        <h3 class="mb-4">QUICK LINKS</h3>
                        <div class="d-grid gap-3">
                            <a href="<?php echo adjust_links('views/admistration.php'); ?>" class="btn btn-custom">
                                <i class="fa-solid fa-address-card me-2"></i> Administration
                            </a>
                            <a href="<?php echo adjust_links('views/dep-vision-mission.php'); ?>" class="btn btn-custom">
                                <i class="fa-solid fa-bullseye me-2"></i> Departmental Vision & Mission
                            </a>
                            <a href="<?php echo adjust_links('views/faculty.php'); ?>" class="btn btn-custom">
                                <i class="fa-solid fa-users me-2"></i> Faculty Members
                            </a>
                            <a href="<?php echo adjust_links('views/programs-offered.php'); ?>" class="btn btn-custom">
                                <i class="fa-solid fa-graduation-cap me-2"></i> Programs Offered
                            </a>
                            <a href="<?php echo adjust_links('views/about-cpe.php'); ?>" class="btn btn-custom">
                                <i class="fa-solid fa-info-circle me-2"></i> About CPE
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 footer-section ">
                    <div class="footer-card p-4 footer-section  h-100">
                        <h3><strong>Contact Us</strong></h3>
                        <p>Department of Computer Engineering,<br>
                            Bahauddin Zakariya University,<br>
                            Bosan Road, Multan, Punjab, Pakistan</p>
                        <p><i class="fa-solid fa-phone me-2"></i> (+92) 61 9210071</p>
                        <p><i class="fa-solid fa-envelope me-2"></i> ayeshanoreen23@student.bzu.edu.pk</p>
                        <div class="social-links d-flex gap-3 fs-3 mt-3">
                            <a href="https://linkedin.com/in/khatoonintech" target="_blank">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="https://github.com/khatoonintech" target="_blank">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://whatsapp.com/channel/0029VaGDt8U89inaawy4Xa15" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="https://youtube.com/khatoonintech" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="container">
        <div class="disclaimer-text">
            <p>Developed & Maintained by <strong>Ayesha Noreen</strong></p>
            <p>GSoC Contributor | ByteWise Ltd. Certified ML/DL Engineer | SWEfellow @Confiniti | SWEfellow
                @HeadStarterAI | Campus Ambassador @IMUN</p>
            <p>Python | C | C++ | PHP | Pandas | NumPy | TensorFlow | PyTorch | scikit-learn | Node.js | Express.js |
                GCP | MS Azure</p>
            <p><strong>Disclaimer:</strong> Data on this website is for information only and cannot be used for any
                legal purpose.</p>
        </div>
    </div>
    <?php else : ?> 
    <div class="container">
        <div class="disclaimer-text">
            <p>Developed & Maintained by <strong>Ayesha Noreen</strong></p>
            <p>GSoC Contributor | ByteWise Ltd. Certified ML/DL Engineer | SWEfellow @Confiniti | SWEfellow
                @HeadStarterAI | Campus Ambassador @IMUN</p>
            <p>Python | C | C++ | PHP | Pandas | NumPy | TensorFlow | PyTorch | scikit-learn | Node.js | Express.js |
                GCP | MS Azure</p>
            <p><strong>Disclaimer:</strong> Data on this website is for information only and cannot be used for any
                legal purpose.</p>
        </div>
    </div>

    <?php endif ; ?> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>