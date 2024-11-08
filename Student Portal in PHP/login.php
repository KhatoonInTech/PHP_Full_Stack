<?php
session_start();
// If the user is already logged in, redirect them to the index page
if (isset($_SESSION["user"])) {
    header("Location: dashbord.php");
    exit();
}

// Check if the form has been submitted
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
 
    $errors = array();
    
    // Validation logic
    if (empty($email) || empty($password)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    
    // Only proceed if there are no validation errors
    if (count($errors) == 0) {
        require_once "MySQL/database.php";
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($row = mysqli_fetch_assoc($result)) {
            // Verify password
            if (password_verify($password, $row['password'])) {
                // Password is correct
                $_SESSION["user"] = $row['id'];
                header("Location: dashbord.php");
                exit();
            } else {
                // Password is incorrect
                array_push($errors, "Invalid password");
            }
        } else {
            // User not found
            array_push($errors, "User not found");
        }
        
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}

// Display errors if any
if (isset($errors) && count($errors) > 0) {
    foreach ($errors as $error) {
        echo "<div class='alert alert-danger'><strong>$error</strong></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In| BZU Multan</title>

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
    <div class="row g-4">
        <div class="col-md-12">
            <div class="admin-card p-4 h-100">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center" style="width: 150px; height: 150px; margin-bottom:30%">
                            <i class="fas fa-users text-black fa-6x"></i>
                        </div>
                    </div>
                        <div class="col-md-8">
                            <h2 class="text-center mb-4 pixelated-font">Find My Account</h2>

                            <form action="login.php" method="post">
                                
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control pixelated-font" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" class="form-control pixelated-font" name="password" placeholder="Password" required>
                                </div>
                                
                                <div class="form-btn mb-3">
                                    <button type="submit" class="btn btn-custom logout-btn w-100 " value="Login" name="login">
                                    <i class="fas fa-sign-out-alt me-2" ></i>Log Me In
                                </div>
                            </form><br>
                            <div class="text-center">
                                <p class="text-center">New to Portal? <a href="registration.php" class="text-warning">Register Here</a></p>
                                <br><p class="text-center"><a href="forgetpswd.php" class="text-info">Forget Password?</a></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
 </div> 
<!-- Footer -->
<?php include 'footer.php'; ?>
</body>
</html>