<?php
include("initiation.php");
session_start();

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtid = $_POST['rollno'];
$txtdob = $_POST['DOB'];
$txtpass = $_POST['password'];
$txtb = $_POST['branch'];

$sql = "INSERT INTO student_info (`Name`,`Roll no`,`Branch`,`DOB`,`Email`) 
VALUES ( '$txtName', '$txtid', '$txtb', '$txtdob','$txtEmail')";
$result1 = mysqli_query($db,$sql);

$data = "INSERT INTO student_login (`username`, `password`) 
VALUES ( '$txtid', '$txtpass')";
$result2 = mysqli_query($db, $data);

$del = " DELETE FROM `stureq` WHERE `Name` = '$txtName' ";
$res = mysqli_query($db,$del);

if($result1 == TRUE && $result2 == TRUE)
{
    echo "<br><h1 style='text-align:center'>Student added to Database<h1>";

    echo "<h3 style='text-align:center'><a href='mailto:$txtEmail?subject=Your Login Id :$txtid and Password :$txtpass'>Send Credentials</a></h3>";
}
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>