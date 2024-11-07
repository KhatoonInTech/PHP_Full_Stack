<?php
session_start();
// If the user is already logged in, redirect them to the index page
if (isset($_SESSION["email"])) {
    header("Location: dashbord.php");
    exit();
}

// Check if the form has been submitted
if (isset($_POST["submit"])) {
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];
    $terms = $_POST["terms"];
    $rememberMe = isset($_POST["rememberMe"]) ? true : false;
    $errors = array();

    // Validation logic
    if (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }
    if ($password !== $passwordRepeat) {
        array_push($errors, "Passwords do not match");
    }
    if (!$terms) {
        array_push($errors, "You must agree to the terms and privacy policy");
    }

    // Check if email exists
    require_once "MySQL/database.php";
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        array_push($errors, "Email already exists!");
    }

    // Insert into database if no errors
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger pixelated-font'>$error</div>";
        }
    } else {
        // Store the plain text password directly (Note: In a real application, you should hash the password)
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $password);
        if (mysqli_stmt_execute($stmt)) {
            if ($rememberMe) {
                setcookie("email", $email, time() + (86400 * 30), "/"); // Cookie expires in 30 days
                setcookie("password", $password, time() + (86400 * 30), "/"); // Cookie expires in 30 days

            }
            $_SESSION["user"] = $email;
            echo "<div class='alert alert-success pixelated-font'>You are registered successfully.</div>";
        } else {
            die("Something went wrong");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | BZU Multan</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords" content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
<!-- Header with no nav bar  -->
<?php require_once 'no_nav_header.php';?>  
<br>
<div class="container  mt-6"><br>
<h1 class="text-center text-title mb-10"><strong><b>Create My Account</b></strong></h1>
<br>
    <div class="row g-4">
        <div class="col-md-12">

            <div class="admin-card p-4 h-100">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center" style="width: 150px; height: 150px; margin-bottom:45%">
                            <i class="fas fa-person-circle-plus text-white fa-7x"></i>
                        </div>
                    </div>
                        <div class="col-md-8">
                            <h1 class="text-center mb-4 pixelated-font">Registration Form</h1>

                            <form action="registration.php" method="post">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control pixelated-font" name="fullname" placeholder="Full Name" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control pixelated-font" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control pixelated-font" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control pixelated-font" name="repeat_password" placeholder="Repeat Password" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="checkbox" class="form-check-input text-info" id="rememberMe" name="rememberMe">
                                <label class="form-check-label text-info" for="rememberMe">Remember me</label>
                            </div>
                            <div class="form-group mb-3">
                                <input type="checkbox" class="form-check-input text-info" id="terms" name="terms" required>
                                <label class="form-check-label text-info" for="terms">I agree to the <a href="views/TERMS.html" class="text-info  text-warning">terms and conditions</a> and <a href="views/PRIVACY_POLICY.html"  class="text-warning text-info">privacy policy</a></label>
                            </div>
                            <div class="form-btn mb-3">
                                <button type="submit" class="btn btn-custom logout-btn w-100 " value="Register" name="submit">
                                <i class="fas fa-sign-in-alt me-2"></i> Get Me Registered
                                </button>
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="text-center">Already Registered? <a href="login.php" class="text-warning">Login Here</a></p>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
 </div> 
<!-- Footer -->
<br><br>
<?php require_once 'footer.php'; ?>

</body>
</html>