<?php
   include('initiation.php');
   session_start();
?>
<!DOCTYPE html>

<head>
    <title>Admin Page </title>
    <style>
    body {
        background: rgb(144, 225, 144);
        background: linear-gradient(90deg, rgba(144, 225, 144, 1) 19%, rgba(121, 159, 226, 1) 100%, rgba(68, 170, 208, 1) 100%);
    }

    h2 {
        background-color: #004d4d;
        height: 35px;
        width: 500px;
        padding: 7px;
        border: 4px solid #8ede01;
        border-radius: 10px;
        margin-top: 5px;
        margin-left: 500;
        text-align: center;
    }

    a:link {
        color: #ffffff;
        text-decoration: none;
    }

    a:hover {
        color: #ffffff;
        text-decoration: none;
    }

    a:active {
        color: #003333;
        text-decoration: none;
    }

    a:visited {
        color: #ffffff;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <h1>Welcome <?php echo  $_SESSION['user_name'] ?></h1>
    <?php echo "<br><br>"; ?>
    <h2><a href="studentlist.php">Student list</a></h2>
    <h2><a href="facultylist.php">Faculty list</a></h2>
    <h2><a href="c1student.php">CS201 Student Attendance</a></h2>
    <h2><a href="c2student.php">CS211 Student Attendance</a></h2>
    <h2><a href="c3student.php">EE103 Student Attendance</a></h2>
    <h2><a href="c4student.php">ME101 Student Attendance</a></h2>
    <h2><a href="c5student.php">PH105 Student Attendance</a></h2>
    <h2><a href="facreg.php">Faculty Registration</a></h2>
    <h2><a href="stureg.php">Student Registration</a></h2>
    <h2><a href="search.php">Search Student</a></h2>
    <h2><a href="logout.php">Sign Out</a></h2>
</body>

</html>