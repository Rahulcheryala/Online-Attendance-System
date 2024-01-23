<!DOCTYPE html>
<html>

<head>
    <title>
        Attendance
    </title>
    <style>
    table,
    th,
    td {
        border: 3.5px solid black;
        font-size: 18px;
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

<body>

    <?php
    include('initiation.php');
    session_start();
    $name = $_SESSION['login_user'];
    echo "<br><br>";
?>

    <?php
    echo "<br><br><h1>Your attendence</h1><br>";

    $sql = "SELECT * FROM cs201 WHERE `Roll no` = $name";
    $result = $db->query($sql);
    echo "<table style='height:6cm'><tr><th>Course Code</th><th>Course</th><th>Attendance Percentage</th></tr>";
    if( $row = $result->num_rows > 0)
    {
        $s1 = "SELECT `course` FROM `courses` WHERE `Course code` = 'cs201' ";
        $r1 = $db->query($s1);
        while ($row1 = $r1->fetch_assoc())
        {
            echo "<tr><td>CS201</td>"."   <td>".$row1['course']."</td>   ";
        }
        while($row = $result->fetch_assoc())
        {
            echo " <td style='padding-left:55px;'>".$row['Attendance Percentage']."</td></tr>  ";
        }

    }

    $sql = "SELECT * FROM cs211 WHERE `Roll no` = $name";
    $result = $db->query($sql);

    if( $row = $result->num_rows > 0)
    {
        $s2 = "SELECT `course` FROM `courses` WHERE `Course code` = 'cs211' ";
        $r2 = $db->query($s2);
        while ($row2 = $r2->fetch_assoc())
        {
            echo "<tr><td>CS211</td>"."  <td>".$row2['course']."</td>  ";
        }
        while($row = $result->fetch_assoc())
        {
            echo "<td style='padding-left:55px;'>".$row['Attendance Percentage']."</td></tr>  ";
        }
    }

    $sql = "SELECT * FROM ee103 WHERE `Roll no` = $name";
    $result = $db->query($sql);

    if( $row = $result->num_rows > 0)
    {
        $s3 = "SELECT `course` FROM `courses` WHERE `Course code` = 'ee103' ";
        $r3 = $db->query($s3);
        while ($row3 = $r3->fetch_assoc())
        {
            echo "<tr><td>EE103</td>"."  <td>".$row3['course']."</td>  ";
        }
        while($row = $result->fetch_assoc())
        {
            echo "<td style='padding-left:55px;'>".$row['Attendance Percentage']."</td></tr>  ";
        }
    }

    $sql = "SELECT * FROM ph105 WHERE `Roll no` = $name";
    $result = $db->query($sql);

    if( $row = $result->num_rows > 0)
    {
        $s4 = "SELECT `course` FROM `courses` WHERE `Course code` = 'ph105' ";
        $r4 = $db->query($s4);
        while ($row4 = $r4->fetch_assoc())
        {
            echo "<tr><td>PH105</td>"."  <td>".$row4['course']."</td>  ";
        }
        while($row = $result->fetch_assoc())
        {
            echo "<td style='padding-left:55px;'>".$row['Attendance Percentage']."</td></tr>   ";
        }
    }

    $sql = "SELECT * FROM me101 WHERE `Roll no` = $name";
    $result = $db->query($sql);

    if( $row = $result->num_rows > 0)
    {
        $s5 = "SELECT `course` FROM `courses` WHERE `Course code` = 'me101' ";
        $r5 = $db->query($s5);
        while ($row5 = $r5->fetch_assoc())
        {
            echo "<tr><td>ME101</td>"."  <td>".$row5['course']."</td>  ";
        }
        while($row = $result->fetch_assoc())
        {
            echo "<td style='padding-left:55px;'>".$row['Attendance Percentage']."</td></tr>  ";
        }
    }
?>
</body>

</html>