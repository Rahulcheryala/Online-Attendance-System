<?php
include("initiation.php");
session_start();

$txtroll= $_SESSION['login_user'];

if($_SERVER["REQUEST_METHOD"] == "POST") 
 {   
      
    $myroll = mysqli_real_escape_string($db,$_POST['roll_no']);
    $mypwd = mysqli_real_escape_string($db,$_POST['password']);
    $mycourse = mysqli_real_escape_string($db,$_POST['courseregistration']);
    
    $sql = "SELECT * FROM student_login WHERE username = '$myroll' and password = '$mypwd'";
    $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);

    $data = "SELECT `Course code` FROM courses WHERE `Course code` = '$mycourse'";
    $rs = mysqli_query($db,$data);
    
    $number = mysqli_num_rows($rs);
    
    if(($count == 1) &&($number == 1)&&($txtroll == $myroll) )
    {   
        $txtid = $_POST['roll_no'];
        $zero = 0;
        $txtcourse = $_POST['courseregistration'];
        
            $sql = "INSERT INTO $txtcourse (`Roll no`, `Attendance Percentage`) VALUES ( '$txtid', '$zero')";
            $result = mysqli_query($db, $sql);

            if (mysqli_multi_query($db, $sql))
            {
                 echo "<script>alert('You have Registered for the course $txtcourse')</script>";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
        
    }
    else
    {
        echo "<script>alert('Please recheck the details you have entered')</script>";   
    }
 }

?>