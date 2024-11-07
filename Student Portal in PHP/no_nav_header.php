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

.navbar-dark .navbar-nav .nav-link {
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
            background-image: linear-gradient(to left, #ff28cd, #2c2ca5);
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            font-family: Impact, Courier, 'Arial Narrow Bold';
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
                    <img src="assets/images/logo.png" class="d-inline-block align-text-top logo img-fluid" alt="BZU Logo">
                </a>
                <h1 class=" bold mb-4 ms-3">
                    DEPARTMENT OF COMPUTER ENGINEERING<br>
                    Bahauddin Zakariya University, Multan
                </h1>
            </div>
        <?php if(isset($_SESSION["user"])) : ?>
                <a href="logout.php" class="btn btn-custom logout-btn">
                    <i class="fas fa-sign-out-alt me-2" ></i>Log Out
                </a>
        <?php else : ?> 
            <a href="registration.php" class="btn btn-custom logout-btn">
                    <i class="fas fa-sign-out-alt me-2" ></i>Register/LogIn
                </a>
        <?php endif ; ?>           
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-0" id="navbar-main-header">
            <div class="container header-nav-container d-flex">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenuNavbar">
                    <span class="navbar-toggler-icon"></span>
                    Menu
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mainMenuNavbar">
                    <ul class="navbar-nav fs-6 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashbord.php">
                                
                              
                            </a>
                        </li>
                    </ul>
            </div>
        </nav>
    </header>

</body>
</html>