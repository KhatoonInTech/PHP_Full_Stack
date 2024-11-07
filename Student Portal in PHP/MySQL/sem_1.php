<?php
require_once "database.php";

// prepare and bind
$sql= "INSERT INTO sem_1 (id, ROLL_NO, NAME, GPA, CGPA, STATUS, FAIL) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt,"issddss", $id, $ROLL_NO, $NAME, $GPA, $CGPA, $STATUS, $FAIL);

// set parameters and execute

// Query 1
$id=1;
$ROLL_NO='CPE-23-01';
$NAME='AYESHA NOREEN';
$GPA=3.98;
$CGPA=3.98;
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
$GPA=3.67;
$CGPA=3.67;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 4
$id=4;
$ROLL_NO='CPE-23-04';
$NAME='UQAAB HAIDER';
$GPA=3.47;
$CGPA=3.47;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 5
$id=5;
$ROLL_NO='CPE-23-05';
$NAME='BUSHRA KANOOZ KHAN';
$GPA=3.90;
$CGPA=3.90;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 6
$id=6;
$ROLL_NO='CPE-23-06';
$NAME='MUHAMMAD RIZWAN';
$GPA=3.84;
$CGPA=3.84;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 7
$id=7;
$ROLL_NO='CPE-23-08';
$NAME='ALEENA KHAN';
$GPA=0.00;
$CGPA=0.00;
$STATUS='Drop';
$FAIL='CPE-111T, CPE-111P, NAS-114T, NAS-114P, HUM-116T, CPE-112T, CPE-112P, NAS-115T';
$result = $stmt->execute();

// Query 8
$id=8;
$ROLL_NO='CPE-23-09';
$NAME='EISHA ARAIN';
$GPA=3.92;
$CGPA=3.92;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 9
$id=9;
$ROLL_NO='CPE-23-10';
$NAME='FAHAD USMAN';
$GPA=3.99;
$CGPA=3.99;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 10
$id=10;
$ROLL_NO='CPE-23-11';
$NAME='MUHAMMAD MEHDI';
$GPA=3.60;
$CGPA=3.60;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 11
$id=11;
$ROLL_NO='CPE-23-12';
$NAME='MUHAMMAD UMER';
$GPA=3.93;
$CGPA=3.93;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 12
$id=12;
$ROLL_NO='CPE-23-13';
$NAME='MUHAMMAD ALI';
$GPA=3.88;
$CGPA=3.88;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 13
$id=13;
$ROLL_NO='CPE-23-14';
$NAME='ALIZA NOREEN';
$GPA=3.81;
$CGPA=3.81;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 14
$id=14;
$ROLL_NO='CPE-23-15';
$NAME='ALI SACHAL ABDULLAH';
$GPA=3.90;
$CGPA=3.90;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 15
$id=15;
$ROLL_NO='CPE-23-16';
$NAME='AQIB HUSSAIN';
$GPA=2.79;
$CGPA=2.79;
$STATUS='Pass';
$FAIL='CPE-112T';
$result = $stmt->execute();

// Query 16
$id=16;
$ROLL_NO='CPE-23-17';
$NAME='MUHAMMAD SAMI ULLAH';
$GPA=3.64;
$CGPA=3.64;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 17
$id=17;
$ROLL_NO='CPE-23-18';
$NAME='HAFIZ MUHAMMAD';
$GPA=3.76;
$CGPA=3.76;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 18
$id=18;
$ROLL_NO='CPE-23-19';
$NAME='MUHAMMAD REHAN';
$GPA=2.99;
$CGPA=2.99;
$STATUS='Pass';
$FAIL='CPE-112T';
$result = $stmt->execute();

// Query 19
$id=19;
$ROLL_NO='CPE-23-20';
$NAME='ANAM BIBI';
$GPA=2.39;
$CGPA=2.39;
$STATUS='Pass';
$FAIL='CPE-112T';
$result = $stmt->execute();

// Query 20
$id=20;
$ROLL_NO='CPE-23-21';
$NAME='ESHA ASLAM';
$GPA=3.34;
$CGPA=3.34;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 21
$id=21;
$ROLL_NO='CPE-23-22';
$NAME='AWAIS ALI';
$GPA=3.68;
$CGPA=3.68;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 22
$id=22;
$ROLL_NO='CPE-23-23';
$NAME='MUHAMMAD SHOAIB';
$GPA=3.08;
$CGPA=3.08;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 23
$id=23;
$ROLL_NO='CPE-23-24';
$NAME='NIDA KANWAL';
$GPA=3.74;
$CGPA=3.74;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 24
$id=24;
$ROLL_NO='CPE-23-25';
$NAME='MUHAMMAD NOUMAN';
$GPA=3.27;
$CGPA=3.27;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 25
$id=25;
$ROLL_NO='CPE-23-26';
$NAME='MUBASHIR HASSAN';
$GPA=2.84;
$CGPA=2.84;
$STATUS='Pass';
$FAIL='NAS-115T';
$result = $stmt->execute();

// Query 26
$id=26;
$ROLL_NO='CPE-23-27';
$NAME='MUHAMMAD UMAR';
$GPA=3.39;
$CGPA=3.39;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 27
$id=27;
$ROLL_NO='CPE-23-28';
$NAME='RIZWAN ALI';
$GPA=2.91;
$CGPA=2.91;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 28
$id=28;
$ROLL_NO='CPE-23-29';
$NAME='HANIA KHAN';
$GPA=3.16;
$CGPA=3.16;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 29
$id=29;
$ROLL_NO='CPE-23-30';
$NAME='MUHAMMAD MUJAHID';
$GPA=2.07;
$CGPA=2.07;
$STATUS='Pass';
$FAIL='CPE-111T, NAS-115T, CPE-111P';
$result = $stmt->execute();

// Query 30
$id=30;
$ROLL_NO='CPE-23-31';
$NAME='HASSAN GHANI';
$GPA=3.70;
$CGPA=3.70;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 31
$id=31;
$ROLL_NO='CPE-23-32';
$NAME='YUSRA MARYAM';
$GPA=2.60;
$CGPA=2.60;
$STATUS='Pass';
$FAIL='NAS-115T';
$result = $stmt->execute();

// Query 32
$id=32;
$ROLL_NO='CPE-23-33';
$NAME='NOOR UL AIN FATIMA';
$GPA=2.66;
$CGPA=2.66;
$STATUS='Pass';
$FAIL='NAS-115T';
$result = $stmt->execute();

// Query 33
$id=33;
$ROLL_NO='CPE-23-34';
$NAME='ABID ALI';
$GPA=3.09;
$CGPA=3.09;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 34
$id=34;
$ROLL_NO='CPE-23-35';
$NAME='RIAZ AHMAD';
$GPA=2.16;
$CGPA=2.16;
$STATUS='Pass';
$FAIL='CPE-112T, NAS-115T';
$result = $stmt->execute();

// Query 35
$id=35;
$ROLL_NO='CPE-23-36';
$NAME='MUHAMMAD AWAIS';
$GPA=2.09;
$CGPA=2.09;
$STATUS='Pass';
$FAIL='CPE-112T, NAS-115T';
$result = $stmt->execute();

// Query 36
$id=36;
$ROLL_NO='CPE-23-37';
$NAME='SAIFULLAH';
$GPA=3.19;
$CGPA=3.19;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();

// Query 37
$id=37;
$ROLL_NO='CPE-23-38';
$NAME='ALISHBA ARIF';
$GPA=3.27;
$CGPA=3.27;
$STATUS='Pass';
$FAIL='No Course to Show';
$result = $stmt->execute();


if ($result) {
    echo "New records of SEMESTER 1 created successfully";
} else {
    echo "Error: " . $conn->error;
}
$stmt->close();
$conn->close();

?>