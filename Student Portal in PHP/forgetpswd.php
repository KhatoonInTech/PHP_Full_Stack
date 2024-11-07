<?php
session_start();

require_once 'MySQL/database.php'; // Ensure you have this file with database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Please enter a valid email address.";
        } else {
            // Check if email exists in database
            $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows ==1) {
                // Generate random 6-digit number
                $random_number = sprintf("%06d", mt_rand(1, 999999));
                
                // Store the random number and timestamp in session
                $_SESSION['reset_code'] = $random_number;
                $_SESSION['reset_email'] = $email;
                $_SESSION['reset_time'] = time();
                
                $success = true; // Changed to boolean for conditional rendering
                $email_subject = urlencode("Password Reset Verification Code");
                $email_body = urlencode("Your verification code is: " . $random_number);
                $mailto_link = "mailto:$email?subject=$email_subject&body=$email_body";
                
            } else {
                //Set Success to false if email is not found in database
                $success = false; 
            }
        }
    } elseif (isset($_POST['verification_code']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
        $verification_code = $_POST['verification_code'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        
        if ($verification_code != $_SESSION['reset_code']) {
            $modal_error = "Invalid verification code.";
        } elseif (time() - $_SESSION['reset_time'] > 300) { // 5 minutes expiry
            $modal_error = "Verification code has expired.";
        } elseif ($new_password != $confirm_password) {
            $modal_error = "Passwords do not match.";
        } elseif (strlen($new_password) < 8) {
            $modal_error = "Password must be at least 8 characters long.";
        } else {
            // Update password in database
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $email = $_SESSION['reset_email'];
            
            $update_stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
            $update_stmt->bind_param("ss", $hashed_password, $email);
            
            if ($update_stmt->execute()) {
                $update_success = "Password successfully updated. You can now login with your new password.";
                // Clear reset session variables
                unset($_SESSION['reset_code']);
                unset($_SESSION['reset_email']);
                unset($_SESSION['reset_time']);
            } else {
                $modal_error = "An error occurred. Please try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css"  rel="stylesheet">

   
</head>
<body>
<body>
  <!-- Header section with dark text -->
  <?PHP require_once "no_nav_header.php"; ?>
  <br>
  <div class="container mt-6">
        <h1 class="text-center text-title mb-10"><strong><b>Recover My Account</b></strong></h1>
        <div class="row g-4">
        <div class="col-md-12"> 
        <div class="footer-card p-4">
        <div class="row align-items-center">

            <div class="col-md-3">
                        <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center" style="width: 150px; height: 150px; margin-bottom:10%">
                            <i class="fas fa-redo-alt text-white fa-5x"></i>
                        </div>
                    </div>
                        <div class="col-md-8">
                        <h2 class="text-center mb-4 pixelated-font">Forget Password Form</h2>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo htmlspecialchars($error); ?>
                </div>

            <?php elseif(isset($success) && $success==false): ?>
                <div class="alert alert-success" role="alert">
                Your email address is not registered to this Student Portal.
                </div>
                <div class="mb-3 text-center">
                    <a class="text-info" href="forgetpswd.php"> Please Enter a valid email.</a>
                </div>
                <a  type="button" class="btn btn-custom logout-btn w-100" href="registration.php">
                    Or Register to this Student Portal here
                </a>

            <?php elseif(isset($success) && $success==true): ?>
                <div class="alert alert-success" role="alert">
                    A verification code has been generated.
                    <a href="<?php echo htmlspecialchars($mailto_link); ?>" class="alert-link">Click here to open your email client</a>
                </div>
                <div class="mb-3 text-center">
                    <p class="text-info">After sending the email to yourself, click below to enter the verification code:</p>
                </div>
                <button type="button" class="btn btn-custom logout-btn w-100" data-bs-toggle="modal" data-bs-target="#resetModal">
                    Enter Verification Code
                </button>
           
                    
            <?php endif; ?>
            
      
            <?php if (isset($update_success)): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo htmlspecialchars($update_success); ?>
                </div>
                <a href="login.php" class="btn btn-custom logout-btn w-100">Back to Login</a>
            <?php else: ?>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="mb-3">
                        <label for="email" class="form-label text-info"><strong>Email address</strong></label>
                        <input type="email" class="form-control pixelated-font" id="email" name="email" placeholder="Enter the email associated with your account." required>
                       
                    </div>
                    <button type="submit" class="btn btn-custom logout-btn w-100">Send me email</button>
                </form>
            <?php endif; ?>


            <div class="mt-3 text-center">
                <a href="login.php" class="text-info text-center text-warning">Back to Login</a>
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
            
            </div>
    <!-- Reset Password Modal -->
    <div class="modal fade" id="resetModal" tabindex="-1" aria-labelledby="resetModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title pixelated-font" id="resetModalLabel">Reset Password</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php if (isset($modal_error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo htmlspecialchars($modal_error); ?>
                            </div>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="verification_code" class="form-label text-info">Verification Code</label>
                            <input type="text" class="form-control" id="verification_code" name="verification_code" required>
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label text-info">New Password</label>
                            <input type="password" class="form-control" id="new_password" name="new_password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label text-info">Confirm New Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary text-info" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-custom logout-btn">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php if (isset($modal_error)): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var resetModal = new bootstrap.Modal(document.getElementById('resetModal'));
            resetModal.show();
        });
    </script>
    <?php endif; ?>
    <br><br>
<!-- Footer -->
<?php require_once "footer.php"; ?>
</body>
</html>