<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Admin Login </title>

    <style>
    body {
        background-image: url("1.jpeg");
        font-family: 'Times New Roman', serif;
    }

    #body {
        background: #136a8a;
        text-align: center;
        margin-right: 500px;
        margin-left: 500px;
        margin-top: 200px;
        padding: 50px;
        border-radius: 25px;
        box-shadow:
            0px 2px 10px rgba(0, 0, 0, 0.2),
            0px 10px 20px rgba(0, 0, 0, 0.3),
            0px 30px 60px 1px rgba(0, 0, 0, 0.5);
    }

    button {
        background-color: white;
        color: black;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 4px;
        border-radius: 8px;
        border: 3px solid black;
    }

    h1 {
        text-align: center;
        margin-top: 1px;
        font: verdana;
    }
    </style>
</head>

<body>
    <?php
   include("initiation.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      
    $myid = mysqli_real_escape_string($db,$_POST['Username']);
    $mypwd = mysqli_real_escape_string($db,$_POST['Password']); 
    
    $sql = "SELECT * FROM admin_login WHERE username = '$myid' and password = '$mypwd'";
    $result = mysqli_query($db,$sql);
    
    $count = mysqli_num_rows($result);
    
    if($count == 1) 
    {
      $data="SELECT * FROM admin_info WHERE `Admin Id`= '$myid'" ;
      $rs = mysqli_query($db,$data);
      $num = mysqli_num_rows($rs);
      $x = '';
      if($num == 1)
      {
         while($row = $rs->fetch_assoc())
         {
             $x = $row['Name'];
             echo $x;
         }
      }
      $_SESSION['user_name'] =  $x;
      $_SESSION['login_user'] = $myid;
       
       header("location:admin.php");
    }
    else 
    {
        echo ' <script>alert("Your Login Name or Password is invalid")</script>';
    }
 }
 ?>

    <div id="body">
        <h1 style="color:white">Admin Login</h1>
        <form action="adminlogin.php" method="POST">
            <label for="username" style="color:white; font-size:25px">Username : </label>
            <input type="text" id="un" name="Username" required> <br> <br>
            <label for="password" style="color:white; font-size:25px">Password : </label>
            <input type="password" id="pw" name="Password" required> <br> <br>
            <button id="id1" type="submit">Login as Admin</button>
            <button id="id1" type="reset" value="Reset">Reset</button>
        </form>
    </div>
</body>

</html>