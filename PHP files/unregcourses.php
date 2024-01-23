<!DOCTYPE html>
<html>

<head>
    <title>
        Course Registration
    </title>

    <style>
    table,
    th,
    td {
        border: 3.5px solid black;
        font-size: 18px;
    }

    td {
        text-align: left;
    }

    h1,
    h2,
    h3 {
        color: black;
        font-family: Garamond;
        text-align: center;
        font-size: 35px;
    }

    table {
        margin: auto;
        width: 20cm;
        height: 4cm;
        align: center;
        border-radius: 10px;
    }

    tr {
        background-color: rgba(100%, 100%, 100%, 0.6);
    }

    th {
        background-color: rgb(255, 71, 26);
        color: rgb(220, 220, 220);
        border-radius: 10px;
        font-family: Georgia, serif;

    }

    td {
        border-radius: 10px;
        font-family: monospace;
        padding-left: 55px;
    }

    body {
        background-repeat: no-repeat;
        background-size: 100%;
        background-image: url("5.jpeg");
    }

    #id1 {
        width: 100px;
        margin-right: 100px;
        border: 3px solid black;
        border-radius: 8px;
    }
    </style>
</head>

<body>
    <?php
include("initiation.php");
session_start();
$txtid = $_SESSION['login_user'];

echo "<br><h2>Un-registered Courses<h2>";

echo "<table style='height:3cm;'><tr><th>Course Code</th><th>Course</th><th>Credits</th></tr>";

$sql = "SELECT `Roll no` FROM cs201 WHERE `Roll no`=$txtid";
$result = $db->query($sql);

$code = 0;

if( ($row = $result->num_rows) == 0)
{
    $s1 = " SELECT * FROM `courses` WHERE `Course code` = 'cs201' ";
    $r1 = $db->query($s1);
    while( $row1 = $r1->fetch_assoc() )
        {
            echo "<tr><td>".$row1['Course code']."</td><td> ".$row1['course']."</td><td> ".$row1['credits']."</td></tr>";
        }
    $code = 1;

}

$sql = "SELECT `Roll no` FROM cs211 WHERE `Roll no`=$txtid";
$result = $db->query($sql);

if( ($row = $result->num_rows) == 0)
{
    $s2 = " SELECT * FROM `courses` WHERE `Course code` = 'cs211' ";
    $r2 = $db->query($s2);
    while( $row2 = $r2->fetch_assoc() )
        {
            echo "<tr><td>".$row2['Course code']."</td><td> ".$row2['course']."</td><td> ".$row2['credits']."</td></tr>";
        }
    $code = 1;

}

$sql = "SELECT `Roll no` FROM ee103 WHERE `Roll no`=$txtid";
$result = $db->query($sql);

if( ($row = $result->num_rows) == 0)
{
    $s3 = " SELECT * FROM `courses` WHERE `Course code` = 'ee103' ";
    $r3 = $db->query($s3);
    while( $row3 = $r3->fetch_assoc() )
        {
            echo "<tr><td>".$row3['Course code']."</td><td> ".$row3['course']."</td><td> ".$row3['credits']."</td></tr>";
        }
    $code = 1;
    
}

$sql = "SELECT `Roll no` FROM ph105 WHERE `Roll no`=$txtid";
$result = $db->query($sql);

if( ($row = $result->num_rows) == 0)
{
    $s4 = " SELECT * FROM `courses` WHERE `Course code` = 'ph105' ";
    $r4 = $db->query($s4);
    while( $row4 = $r4->fetch_assoc() )
        {
            echo "<tr><td>".$row4['Course code']."</td><td> ".$row4['course']."</td><td> ".$row4['credits']."</td></tr>";
        }
    $code = 1;

}

$sql = "SELECT `Roll no` FROM me101 WHERE `Roll no`=$txtid";
$result = $db->query($sql);

if( ($row = $result->num_rows) == 0)
{
    $s5 = " SELECT * FROM `courses` WHERE `Course code` = 'me101' ";
    $r5 = $db->query($s5);
    while( $row5 = $r5->fetch_assoc() )
        {
            echo "<tr><td>".$row5['Course code']."</td><td> ".$row5['course']."</td><td> ".$row5['credits']."</td></tr>";
        }
    $code = 1;

}
if($code==0)
{   
    echo "<tr><td style='padding-left:105px'>"."---"."</td><td style='padding-left:105px'>"."---"."</td><td style='padding-left:105px'>"."---"."</td></tr>";
    echo "<p style='font-size:25px'>You have no Unregistered Courses<p>";
}
include("courseregistration.php");
?>
</body>

</html>