<!DOCTYPE html>
<html>

<head>
    <title>
        Students Attendance
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
        margin-left: 560px;
        width: 10cm;
        height: 9cm;
        align: center;
        border-radius: 10px;
        text-align: center;
    }
    </style>
</head>

<body>
    <?php
   include('initiation.php');
   session_start();

   $nma = $_SESSION['login_user'];

    echo "<h1>Students' Attendance<br></h1> ";

   $now = " SELECT `Course code`, `Faculty ID` FROM faculty_info WHERE `Faculty ID` =  $nma ";
   $r = $db->query($now);

   $row = $r->fetch_assoc();
   $course = $row['Course code'];

   $sql = " SELECT * FROM $course ";
   $result = $db->query($sql);

   echo "<table style><tr><th>Roll No</th><th>Attendance Percentage</th></tr>";

   while ( $row = $result->fetch_assoc() )
   {
     echo "<tr><td>".$row['Roll no']."</td><td>" . $row['Attendance Percentage'] . "</td></tr>";
   }

 ?>
</body>

</html>