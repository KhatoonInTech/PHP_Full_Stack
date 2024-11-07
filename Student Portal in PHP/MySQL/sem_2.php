<?php
require_once "database.php";

// prepare and bind
$sql= "INSERT INTO sem_2 (id, ROLL_NO, NAME, GPA, CGPA, STATUS, FAIL) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt,"issddss", $id, $ROLL_NO, $NAME, $GPA, $CGPA, $STATUS, $FAIL);

// set parameters and execute
// Query 1
$id=1;
$ROLL_NO='CPE-23-01';
$NAME='AYESHA NOREEN';
$GPA=4.00;
$CGPA=3.99;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 2
$id=2;
$ROLL_NO='CPE-23-02';
$NAME='MUHAMMAD RAZA';
$GPA=3.91;
$CGPA=3.91;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 3
$id=3;
$ROLL_NO='CPE-23-03';
$NAME='ANIQA IMRAN';
$GPA=3.53;
$CGPA=3.60;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 4
$id=4;
$ROLL_NO='CPE-23-04';
$NAME='UQAAB HAIDER';
$GPA=3.68;
$CGPA=3.58;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 5
$id=5;
$ROLL_NO='CPE-23-05';
$NAME='BUSHRA KANOOZ KHAN';
$GPA=3.99;
$CGPA=3.94;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 6
$id=6;
$ROLL_NO='CPE-23-06';
$NAME='MUHAMMAD RIZWAN';
$GPA=3.64;
$CGPA=3.74;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 7
$id=7;
$ROLL_NO='CPE-23-08';
$NAME='ALEENA KHAN';
$GPA=3.79;
$CGPA=3.86;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 8
$id=8;
$ROLL_NO='CPE-23-09';
$NAME='EISHA ARAIN';
$GPA=3.79;
$CGPA=3.89;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 9
$id=9;
$ROLL_NO='CPE-23-10';
$NAME='FAHAD USMAN';
$GPA=3.43;
$CGPA=3.51;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 10
$id=10;
$ROLL_NO='CPE-23-11';
$NAME='MUHAMMAD MEHDI';
$GPA=3.95;
$CGPA=3.94;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 11
$id=11;
$ROLL_NO='CPE-23-12';
$NAME='MUHAMMAD UMER';
$GPA=3.59;
$CGPA=3.74;
$STATUS='Pass';
$FAIL='ARAB152';
$result = $stmt->execute();

// Continue for the remaining rows...
// Query 12
$id=12;
$ROLL_NO='CPE-23-13';
$NAME='MUHAMMAD ALI';
$GPA=3.37;
$CGPA=3.59;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 13
$id=13;
$ROLL_NO='CPE-23-14';
$NAME='ALIZA NOREEN';
$GPA=3.89;
$CGPA=3.90;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 14
$id=14;
$ROLL_NO='CPE-23-15';
$NAME='ALI SACHAL ABDULLAH';
$GPA=3.24;
$CGPA=3.02;
$STATUS='Pass';
$FAIL='CPE-112T';
$result = $stmt->execute();

// Query 15
$id=15;
$ROLL_NO='CPE-23-16';
$NAME='AQIB HUSSAIN';
$GPA=3.55;
$CGPA=3.60;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 16
$id=16;
$ROLL_NO='CPE-23-17';
$NAME='MUHAMMAD SAMI ULLAH';
$GPA=3.58;
$CGPA=3.67;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 17
$id=17;
$ROLL_NO='CPE-23-18';
$NAME='HAFIZ MUHAMMAD';
$GPA=3.17;
$CGPA=3.08;
$STATUS='Pass';
$FAIL='CPE-112T';
$result = $stmt->execute();

// Query 18
$id=18;
$ROLL_NO='CPE-23-19';
$NAME='MUHAMMAD REHAN';
$GPA=2.82;
$CGPA=2.60;
$STATUS='Pass';
$FAIL='CPE-112T, CPE-122T';
$result = $stmt->execute();

// Query 19
$id=19;
$ROLL_NO='CPE-23-20';
$NAME='ANAM BIBI';
$GPA=0.00;
$CGPA=1.67;
$STATUS='Drop';
$FAIL='CPE-121T, CPE-121P, CPE-122T, CPE-122P, CPE-123T, CPE-123P, CPE-124T, NAS-125T, HUM-126T, ARAB-152';
$result = $stmt->execute();

// Query 20
$id=20;
$ROLL_NO='CPE-23-21';
$NAME='ESHA ASLAM';
$GPA=3.77;
$CGPA=3.73;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Continue with the remaining queries...
// Query 21
$id=21;
$ROLL_NO='CPE-23-22';
$NAME='AWAIS ALI';
$GPA=2.57;
$CGPA=2.82;
$STATUS='Pass';
$FAIL='CPL-122T';
$result = $stmt->execute();

// Query 22
$id=22;
$ROLL_NO='CPE-23-23';
$NAME='MUHAMMAD SHOAIB';
$GPA=3.23;
$CGPA=3.48;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 23
$id=23;
$ROLL_NO='CPE-23-24';
$NAME='NIDA KANWAL';
$GPA=3.42;
$CGPA=3.34;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 24
$id=24;
$ROLL_NO='CPE-23-25';
$NAME='MUHAMMAD NOUMAN';
$GPA=3.39;
$CGPA=3.12;
$STATUS='Pass';
$FAIL='NAS-115T';
$result = $stmt->execute();

// Query 25
$id=25;
$ROLL_NO='CPE-23-26';
$NAME='MUBASHIR HASSAN';
$GPA=3.19;
$CGPA=3.29;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 26
$id=26;
$ROLL_NO='CPE-23-27';
$NAME='MUHAMMAD UMAR';
$GPA=2.83;
$CGPA=2.87;
$STATUS='Pass';
$FAIL='ARAB152';
$result = $stmt->execute();

// Query 27
$id=27;
$ROLL_NO='CPE-23-28';
$NAME='RIZWAN ALI';
$GPA=3.36;
$CGPA=3.26;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 28
$id=28;
$ROLL_NO='CPE-23-29';
$NAME='HANIA KHAN';
$GPA=3.17;
$CGPA=2.62;
$STATUS='Pass';
$FAIL='CPE-111T, NAS-115T, CPE-111P';
$result = $stmt->execute();

// Query 29
$id=29;
$ROLL_NO='CPE-23-30';
$NAME='MUHAMMAD MUJAHID';
$GPA=3.64;
$CGPA=3.67;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 30
$id=30;
$ROLL_NO='CPE-23-31';
$NAME='HASSAN GHANI';
$GPA=3.05;
$CGPA=2.83;
$STATUS='Pass';
$FAIL='NAS-115T';
$result = $stmt->execute();

// Query 31
$id=31;
$ROLL_NO='CPE-23-32';
$NAME='YUSRA MARYAM';
$GPA=2.71;
$CGPA=2.68;
$STATUS='Pass';
$FAIL='NAS-115T, NAS-125T';
$result = $stmt->execute();

// Query 32
$id=32;
$ROLL_NO='CPE-23-33';
$NAME='NOOR UL AIN FATIMA';
$GPA=2.71;
$CGPA=2.90;
$STATUS='Pass';
$FAIL='CPE-122T';
$result = $stmt->execute();

// Query 33
$id=33;
$ROLL_NO='CPE-23-34';
$NAME='ABID ALI';
$GPA=2.35;
$CGPA=2.26;
$STATUS='Pass';
$FAIL='CPE-IZZT CPE-112T, NAS-115T, NAS-125T';
$result = $stmt->execute();

// Query 34
$id=34;
$ROLL_NO='CPE-23-35';
$NAME='RIAZ AHMAD';
$GPA=1.83;
$CGPA=1.96;
$STATUS='Drop';
$FAIL='CPE-112T NAS-115T, CPE-122T,NAS-125T';
$result = $stmt->execute();

// Query 35
$id=35;
$ROLL_NO='CPE-23-36';
$NAME='MUHAMMAD AWAIS';
$GPA=3.35;
$CGPA=3.27;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 36
$id=36;
$ROLL_NO='CPE-23-37';
$NAME='SAIFULLAH';
$GPA=3.28;
$CGPA=3.27;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 37
$id=37;
$ROLL_NO='CPE-23-38';
$NAME='ALISHBA ARIF';
$GPA=3.20;
$CGPA=3.24;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();
if ($result) {
    echo "New records of SEMESTER 2 created successfully";
} else {
    echo "Error: " . $conn->error;
}
$stmt->close();
$conn->close();
?>