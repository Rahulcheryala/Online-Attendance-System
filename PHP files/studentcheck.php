<?php
   include("initiation.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {


      $myusername = mysqli_real_escape_string($db,$_POST['Username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 

      $sql = "SELECT * FROM student_login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];

      $count = mysqli_num_rows($result);



      if($count == 1)
      {
        //  session_register("myusername");
        $data="SELECT * FROM student_info WHERE `Roll no`= '$myusername'" ;
        $rs = mysqli_query($db,$data);
        $num = mysqli_num_rows($rs);
        $x = '';
        if($num == 1)
        {
         while($row = $rs->fetch_assoc())
         {
            $x = $row['Name'];
         }
        }
        $_SESSION['user_name'] =  $x;
        $_SESSION['login_user'] = $myusername;

         header("location: student.php");
      }
      else
      {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
