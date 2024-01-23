<?php
include("initiation.php");
session_start();

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtid = $_POST['faculty_id'];
$txtdept = $_POST['department'];
$txtpass = $_POST['password'];
$txtcode = $_POST['course_code'];

$sql = "INSERT INTO `faculty_info` (`Name`, `email`, `Faculty ID`, `Department`,`Course code`)
VALUES ( '$txtName', '$txtEmail', '$txtid', '$txtdept','$txtcode')";
$result1 = mysqli_query($db,$sql);

$data = "INSERT INTO faculty_login (`username`, `password`) 
VALUES ('$txtid','$txtpass')";
$result2 = mysqli_query($db, $data);

$del = " DELETE FROM `facreq` WHERE `Name` = '$txtName' ";
$res = mysqli_query($db,$del);

if($result1 == TRUE && $result2 == TRUE)
{
    echo "<br><h1 style='text-align:center'>Faculty added to Database<h1>";

    echo "<h3 style='text-align:center'><a href='mailto:$txtEmail?subject=Your Login Id :$txtid and Password :$txtpass'>Send Credentials</a></h3>";
}
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>