<!DOCTYPE html>
<html>
<head>
  <style>

  body {
      background-image: url("4.jpeg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100%;
  }

  h1 {
      text-align: center;
      font: verdana;
  }

  table,  th,  td {
      border: 3.25px solid black;
      font-size: 18px;
      margin-top: 50px;
  }

  table {
      margin: auto;
      width: 5cm;
      height: 9cm;
      align: center;
      border-radius: 10px;
  }

  th {
      background-color: #33ffff;
      color: #003333;
      border-radius: 10px;
      font-family: Georgia, serif;

  }

  td {
      border-radius: 10px;
      font-family: monospace;
      padding-left: 25px;
      text-align:left;
  }

  </style>
</head>
<body>

  <h1>Attendance Succesfully Marked</h1>

<?php
   include('initiation.php');

   $_SESSION['login_user'] = $_POST['Username'];

   $nma = $_SESSION['login_user'];

   $now = " SELECT `Course code`, `Faculty ID` FROM faculty_info WHERE `Faculty ID` =  $nma ";
   $r = $db->query($now);

   $row = $r->fetch_assoc();
   $course = $row['Course code'];

   echo "<h2 style='text-align:center'>For the following Students</h2>";

   echo "<table><tr><th>STUDENT</th></tr>";

   if( $list = $_POST['students'] )
   {
     foreach( $list as $student )
     {
       echo "<tr><td>".$student."</td></tr>";
     }

     echo "</table>";

     foreach( $list as $student )
     {
       $s = " UPDATE $course SET `classesattended`= `classesattended`+1  WHERE `Roll no` = $student ";
       $r = $db->query($s);
     }
   }

   $a = " UPDATE $course SET `totalclasses` = `totalclasses`+1 ";
   $r2 = $db->query($a);
   $b = " UPDATE $course SET `Attendance Percentage` = (`classesattended` / `totalclasses`)*100 ";
   $r3 = $db->query($b);
?>

</body>

</html>
