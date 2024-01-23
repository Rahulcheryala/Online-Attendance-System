<!DOCTYPE html>
<html>

<head>
    <title>
        Registered Courses
    </title>
    <style>
    table,
    th,
    td {
        border: 3.5px solid black;
        font-size: 18px;

    }

    h1 {
        color: black;
        font-family: Garamond;
        text-align: center;
        font-size: 50px;
    }

    tr {
        background-color: rgba(240, 240, 240, 0.6)
    }

    table {
        margin: auto;
        width: 25cm;
        align: center;
        border-radius: 10px;
    }

    th {
        background-color: rgb(255, 71, 26);
        color: rgba(40, 40, 40, 0.9);
        border-radius: 10px;
        font-family: Georgia, serif;

    }

    td {
        border-radius: 10px;
        font-family: monospace;
        padding-left: 25px;

    }

    body {
        background-repeat: no-repeat;
        background-size: 100%;
        background-image: url("5.jpeg");
    }
    </style>
</head>


<?php
    include('initiation.php');
    session_start();
   $name= $_SESSION['login_user'];


    echo "<br><br><h1>Courses Registered<br><br></h1>";

    echo "<table style='height:6.5cm'><tr><th>Course Code</th><th>Course</th><th>Credits</th></tr>";

    $sql = "SELECT 'Roll no' FROM cs201 WHERE `Roll no`= $name";
    $result = mysqli_query($db,$sql);

    if( $row = $result->num_rows > 0)
    {
        $s1 = " SELECT * FROM `courses` WHERE `Course code` = 'cs201' ";
        $r1 = $db->query($s1);
        while( $row1 = $r1->fetch_assoc() )
        {
            echo "<tr><td>".$row1['Course code']."</td><td>".$row1['course']." </td><td>".$row1['credits']."</td></tr>";
        }

    }

    $sql = "SELECT 'Roll no' FROM cs211 WHERE `Roll no`= $name";
    $result = mysqli_query($db,$sql);

    if( $row = $result->num_rows > 0)
    {
        $s2 = " SELECT * FROM `courses` WHERE `Course code` = 'cs211' ";
        $r2 = $db->query($s2);
        while( $row2 = $r2->fetch_assoc() )
        {
            echo "<tr><td>".$row2['Course code']."</td><td> ".$row2['course']."</td><td> ".$row2['credits']."</td></tr>";
        }

    }

    $sql = "SELECT 'Roll no' FROM ee103 WHERE `Roll no`= $name";
    $result = mysqli_query($db,$sql);

    if( $row = $result->num_rows > 0)
    {
        $s3 = " SELECT * FROM `courses` WHERE `Course code` = 'ee103' ";
        $r3 = $db->query($s3);
        while( $row3 = $r3->fetch_assoc() )
        {
            echo "<tr><td>".$row3['Course code']."</td><td> ".$row3['course']."</td><td> ".$row3['credits']."</td></tr>";
        }

    }

    $sql = "SELECT 'Roll no' FROM ph105 WHERE `Roll no`= $name";
    $result = mysqli_query($db,$sql);

    if( $row = $result->num_rows > 0)
    {
        $s4 = " SELECT * FROM `courses` WHERE `Course code` = 'ph105' ";
        $r4 = $db->query($s4);
        while( $row4 = $r4->fetch_assoc() )
        {
            echo "<tr><td>".$row4['Course code']."</td><td>".$row4['course']."</td><td>  ".$row4['credits']."</td></tr>";
        }

    }

    $sql = "SELECT 'Roll no' FROM me101 WHERE `Roll no`= $name";
    $result = mysqli_query($db,$sql);

    if( $row = $result->num_rows > 0)
    {
        $s5 = " SELECT * FROM `courses` WHERE `Course code` = 'me101' ";
        $r5 = $db->query($s5);
        while( $row5 = $r5->fetch_assoc() )
        {
            echo "<tr><td>".$row5['Course code']."</td><td> ".$row5['course']."</td><td> ".$row5['credits']."</td></tr>";
        }

    }
?>

</body>

</html>