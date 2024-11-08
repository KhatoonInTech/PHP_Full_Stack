<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location: dashbord.php");
    exit();
}

// Initialize variables with default values
$name = "";
$roll_no = "";
$gpa = "";
$cgpa = "";
$status = "";
$courses_failed = "";
$show_modal = false;
$error_type = "";

if(isset($_POST["showresult"])){
    $fullname = $_POST["fullname"];
    $rollno =  $_POST["rollno"];
    $session =  $_POST["session"];
    $semester =  $_POST["semester"];
    
    $show_modal = true; // We'll always show the modal, just with different content
    
    if($semester >= 3){
        $error_type = "pending";
    } else {
        if($semester == "1"){
            $db_table = 'sem_1';
        }elseif($semester == "2"){
            $db_table = 'sem_2';
        }
        
        require_once "MySQL/database.php";
        $query = "SELECT * FROM $db_table WHERE NAME = ? AND ROLL_NO = ?";
        
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ss", $fullname, $rollno);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($row = mysqli_fetch_assoc($result)) {
            $name = $row['NAME'];
            $roll_no = $row['ROLL_NO'];
            $gpa = $row['GPA'];
            $cgpa = $row['CGPA'];
            $status = $row['STATUS'];
            $courses_failed = $row['FAIL'];
            
            if (!($name && $roll_no && $gpa && $cgpa && $status && $courses_failed)) {
                $error_type = "incomplete";
            }
        } else {
            $error_type = "not_found";
        }
        
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results- Department of Computer Engineering | BZU Multan</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords" content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    
    <link href="assets/css/style.css"  rel="stylesheet">


</head>

<body>
    
<?php require_once 'header.php';?>
<div class="container mt-4">
        <h1 class="text-center text-title mb-10"><strong><b>Examination Result, declared by<br>Department of Computer Engineering</b></strong></h1>

        <div class="row g-4">
            <div class="col-md-12">
                <div class="admin-cards p-4">
                    <h3 class="text-center pixelated-font " >Enter Your Details to get your Result</h3>
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center" style="width: 150px; height: 150px;margin-bottom:30%">
                                <i class="fas fa-user-graduate text-black fa-7x"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <form action="" method="post">
                                <div class="form-group mb-3">
                                    <label for="fullname">Full Name:</label>
                                    <input type="text" id="fullname" class="form-control pixelated-font" name="fullname" placeholder="Full Name in CAPITAL LETTERS" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="rollno">Roll No.:</label>
                                    <input type="text" id="rollno" class="form-control pixelated-font" name="rollno" pattern="CPE-\d{2}-\d{2}" placeholder="CPE-23-01" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="session">Session:</label>
                                    <input type="text" id="session" class="form-control pixelated-font" name="session" pattern="\d{4}-\d{2}" placeholder="2023-27" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="semester">Semester:</label>
                                    <select id="semester" class="form-control pixelated-font" name="semester" required>
                                        <option value="" disabled selected>Choose Semester</option>
                                        <option value="1">Semester 1</option>
                                        <option value="2">Semester 2</option>
                                        <option value="3">Semester 3</option>
                                        <option value="4">Semester 4</option>
                                        <option value="5">Semester 5</option>
                                        <option value="6">Semester 6</option>
                                        <option value="7">Semester 7</option>
                                    </select>
                                </div>
                                <div class="form-btn mb-3">
                                    <button type="submit" class="btn btn-custom logout-btn w-100" value="Show Result" name="showresult">
                                        <i class="fas fa-sign-out-alt me-2"></i>Show Result
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resultModalLabel">
                        <?php 
                        if ($error_type) {
                            echo 'SYSTEM NOTICE';
                        } else {
                            echo 'EXAM RESULTS';
                        }
                        ?>
                    </h5>
                    <button type="button" class="btn-close text-warning" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php if ($error_type === "pending"): ?>
                        <div class='text-center'>
                            <h2 class='text-warning'>ACCESS DENIED</h2>
                            <p><strong>Status:</strong> <span>Still Pending</span></p>
                            <p><strong>Reason:</strong> <span>Semester progression required</span></p>
                        </div>
                    <?php elseif ($error_type === "not_found"): ?>
                        <div class='text-center'>
                            <h2 class='text-danger'>ERROR 404</h2>
                            <p><strong>Status:</strong> <span>Record Not Found</span></p>
                            <p><strong>Debug:</strong> <span>Invalid credentials detected</span></p>
                            <p><strong>Action:</strong> <span>Verify and retry</span></p>
                        </div>
                    <?php elseif ($error_type === "incomplete"): ?>
                        <div class='text-center'>
                            <h2 class='text-danger'>DATA CORRUPT</h2>
                            <p><strong>Status:</strong> <span>Incomplete Record</span></p>
                            <p><strong>Action:</strong> <span>Contact sys_admin</span></p>
                        </div>
                    <?php else: ?>
                        <div class='text-center'>
                            <h3 class=" text-center text-info impact "><strong>BAHAUDDIN ZAKARIYA UNIVERSITY, Multan 
                            <br>DEPARTMENT OF COMPUTER ENGINEERING</strong></h3>
                            <h2>EXAMINATION RESULTS</h2>
                            <p><strong>Name:</strong> <span><?php echo $name; ?></span></p>
                            <p><strong>Roll No:</strong> <span><?php echo $roll_no; ?></span></p>
                            <p><strong>GPA:</strong> <span><?php echo $gpa; ?></span></p>
                            <p><strong>CGPA:</strong> <span><?php echo $cgpa; ?></span></p>
                            <p><strong>Status:</strong> <span><?php echo $status; ?></span></p>
                            <p><strong>Failed:</strong> <span><?php echo $courses_failed; ?></span></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom logout-btn" data-bs-dismiss="modal">Close Terminal</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        <?php if ($show_modal): ?>
        $(document).ready(function() {
            $('#resultModal').modal('show');
        });
        <?php endif; ?>
    </script>

<?php require_once 'footer.php'; ?>
</div>

</body>
</html>