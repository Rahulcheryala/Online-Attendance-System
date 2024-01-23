<?php
include('initiation.php');
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Students List
    </title>
    <style>
    table,
    th,
    td {
        border: 3.5px solid black;
        font-size: 18px;
        width: auto;
    }

    tr {
        background-color: rgba(240, 240, 240, 0.6)
    }

    h1 {
        color: black;
        font-family: Garamond;
        text-align: center;
        font-size: 50px;
    }

    th {
        background-color: #ffff33;
        color: rgb(100, 100, 100);
        border-radius: 10px;
        font-family: Georgia, serif;
        text-align: center;
        width: auto;
    }

    body {
        background-repeat: no-repeat;
        background-size: 100%;
        background-image: url("4.jpeg");
        text-align: center;
    }

    td {
        border-radius: 10px;
        font-family: monospace;
        padding: : auto;
        text-align: center;
    }

    table {
        margin-top: 50px;
        margin-left: 300px;
        width: 25cm;
        height: 9cm;
        align: center;
        border-radius: 10px;
        text-align: center;
    }
    </style>
</head>

<body>
    <?php

   $nma = $_SESSION['login_user'];

  echo "<h1>All Students<br></h1> ";

   $now = " SELECT `Course code`, `Faculty ID` FROM faculty_info WHERE `Faculty ID` = $nma ";
   $r = $db->query($now);

   $row = $r->fetch_assoc();
   $course = $row['Course code'];

   $sql = " SELECT * FROM $course ";
   $result = $db->query($sql);

   echo "<table style><tr><th>Roll No</th><th>Name</th><th>Date of Birth</th><th>E-mail</th><th>Attendance</th></tr>";

   while ( $row = $result->fetch_assoc() )
   {
     $rno =  $row['Roll no'];
     $s2 = " SELECT * FROM student_info WHERE `Roll no` = $rno ";
     $r2 = $db->query($s2);
     $row2 = $r2->fetch_assoc();

     echo "<tr><td>".$row2['Roll no'] . "</td><td>" . $row2['Name']."</td><td>".$row2['DOB'] . "</td><td>" . $row2['Email']."</td><td>" .$row['Attendance Percentage'] . "<br>";
   }

?>

</body>

</html>