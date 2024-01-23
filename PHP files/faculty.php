<?php
   include('initiation.php');
   session_start();

?>
<html>

<head>
    <title>Faculty page </title>
    <style>
    h1 {
        text-align: left;
        font: verdana;
    }

    h2 {
        background-color: #006666;
        height: 40px;
        width: 330px;
        padding: 7px;
        border: 4px solid #8ede01;
        border-radius: 10px;
        margin-top: 5px;
        margin-left: 600;
        text-align: center;
        padding-bottom: 0 px;
        padding-top: 12px;
        font: verdana;

    }

    a:link {
        color: #ffff00;
        text-decoration: none;
    }

    a:hover {
        color: #ffff00;
        text-decoration: none;
    }

    a:active {
        color: #ffff00;
        text-decoration: none;
    }

    a:visited {
        color: #ffff00;
        text-decoration: none;
    }

    .c1 {
        width: 50%;
        height: 35px;
        margin: 50px;
    }

    #id1 {
        background-color: #006666;
        padding: 7px;
        color: #ffff00;
        border: 4px solid #8ede01;
        border-radius: 10px;
        margin-left: 550px;
        text-align: center;
        width: 350px;
        height: 60px;
        font-size: 25px;
    }

    body {
        background-image: url("4.jpeg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100%;
    }
    </style>
</head>

<body>
    <h1>Welcome <?php echo  $_SESSION['user_name']?></h1>

    <form action="view_attendance.php" method="post">
        <label for="un"></label>
        <input type="hidden" id="un" name="Username" value=<?php echo $_SESSION['login_user'] ?>>
        <div class="c1">
            <button id="id1" type="submit" formaction="view_students.php">View Students</button>
        </div>
        <div class="c1">
            <button id="id1" type="submit">View Attendance</button>
        </div>
    </form>

    <form action="take_attendance.php" method="post">
        <label for="un"></label>
        <input type="hidden" id="un" name="Username" value=<?php echo $_SESSION['login_user'] ?>>
        <div class="c1">
            <button id="id1" type="submit">Take Attendance</button>
        </div>
    </form>
    <h2><a href="search.php">Search Student</a></h2>
    <h2><a href="logout.php">Sign Out</a></h2>
</body>

</html>