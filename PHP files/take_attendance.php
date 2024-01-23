<!DOCTYPE html>
<html>

<head>
    <title>
        Attendance
    </title>
    <style>
    body {
        background-repeat: no-repeat;
        background-size: 100%;
        background-image: url("4.jpeg");
    }

    h1 {
        text-align: center;
        font-style: verdana;
        margin-top: 150px;
    }

    .formm {
        margin: auto;
        width: 400px;
        text-align: middle;
    }

    .c1 {
        width: 50%;
        padding-left: 48%;
        height: 35px;
    }

    #id1 {
        font-size: 25px;
        text-align: center;
        border-radius: 10px;
    }

    select {
        background-color: transparent;
        border: none;
        padding: 10px;
        margin: 10px;
        width: 50%;
        font-family: verdana;
        font-size: 25px;
        margin-top: 10px;
        margin-left: 100px;
    }
    </style>
</head>

</html>

<?php
   include('initiation.php');
   session_start();

   $nma = $_SESSION['login_user'];

   $now = " SELECT `Course code`, `Faculty ID` FROM faculty_info WHERE `Faculty ID` =  $nma ";
   $r = $db->query($now);

   $row = $r->fetch_assoc();
   $course = $row['Course code'];

   $sql = " SELECT * FROM $course ";
   $result = $db->query($sql);

   echo "<h1>Select the students to mark the attendance</h1>";

    echo "<div class='formm'>";

   echo "<form action='calcatt.php' method='post'>";
   echo "<select name=students[] multiple>";

   while ( $row = $result->fetch_assoc() )
   {
     echo "<option value=".$row['Roll no'].">".$row['Roll no']."</option>";
   }

   echo "</select>";

   echo "</div>";

   echo "<label for='un'></label>";
   echo "<input type = 'hidden' id = 'un' name='Username' value=".$_SESSION['login_user']."><br>";
   echo "<div class='c1' >";
   echo "<button id='id1'  type='submit'>Finish</button>";
   echo "</div>";
   echo "</form>";
?>