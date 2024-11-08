<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location: ../dashbord.php" );
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester Schedule - Department of Computer Engineering | BZU Multan</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Check the admission schedule for the BS and BS (5th Semester) programs offered by the Department of Computer Engineering at Bahauddin Zakariya University, Multan.">
    <meta name="keywords"
        content="BZU Admission Schedule, Computer Engineering Admission, BS Program, Evening Program, Weekend Program">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header section with dark text -->
<?php require_once '../header.php';?>
    <div class="container mt-4">
    <h1 class="text-center text-title mb-10"><strong><b>Academic Calender:<br>SEMESTER SCHEDULE 2024-25</b></strong></h1>
        <br>
        <!-- Notice       -->
        <div class="col-md-12">
            <div class="admin-card p-4">
                <h3 class="pixelated-font mb-4"><i class="fas fa-info-circle me-2"></i><b>Important Information</b></h3>
                <p class="mb-0">The Vice-Chancellor, on the recommendations of the Director Academics has been pleased
                    to approve the following Academic Calendar for all new admission and Running programs (BS & BS 5th
                    Semester) Morning/ Evening/Weekend.</p>
            </div>
        </div><br><br>
        <!-- Fall Semester 2024 -->
        <div class="row g-4">
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h3 class="pixelated-font mb-4"><i class="fas fa-calendar me-2"></i><b>Fall Semester 2024</b></h3>
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Semester Commencement</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">02.09.2024</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Mid Term Examinations</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">28.10.2024 to 04.11.2024</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Final Examination</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">06.01.2025 to 13.01.2025</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Result</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">17.01.2025</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Winter Vacation</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">23.12.2024 to 31.12.2024</span>
                        </li>
                    </ol>
                </div>
            </div>
            <br><br>

            <!-- Spring Semester-2025  -->

            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h3 class="pixelated-font mb-4"><i class="fas fa-calendar me-2"></i><b>Spring Semester-2025</b></h3>
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Semester Commencement</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">20.01.2025</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Sports Week</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">24.02.2025 to 28.02.2025
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Mid Term Examinations</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">17.03.2025 to 24.03.2025</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Final Examination</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">26.05.2025 to 02.06.2025</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Result</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">09.06.2025 </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Summer Vacation</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">02.06.2025 to 29.08.2025 </span>
                        </li>
                    </ol>
                </div>
            </div><br><br>

            <!-- Summer Semester-2025 -->
            <div class="col-md-12">
                <div class="admin-card p-4 h-100">
                    <h3 class="pixelated-font mb-4"><i class="fas fa-calendar me-2"></i><b>Summer Semester-2025</b></h3>
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Semester Commencement</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">10.06.2025</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Mid Term Examinations</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">10.07.2025</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Final Examination</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">11.08.2025
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Result</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">13.08.2025</span>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
   



       <?php require_once '../footer.php'; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>