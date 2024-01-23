<?php
    include('initiation.php');
    session_start();
?>

<!DOCTYPE html>

<head>
    <title>Student page </title>
    <style>
    h1 {
        text-align: left;
        font: verdana;
    }

    .button {
        align: center;
        background-color: rgb(0, 153, 255);
        color: white;
        padding: 20px 40px;
        text-align: center;
        /* text-decoration: none;
        display: inline-block; */
        font-size: 22px;
        /* margin: 4px 4px; */
        /* cursor: pointer; */
        border-radius: 12px;
        border: 4px solid black;
        transition-duration: 0.2s;
        width: 400px;
    }

    #ttt {
        align: center;
        margin-top: 15px;
        margin-left: 35%;
    }

    .button:hover {
        background-color: white;
        color: black;
        border: 3px solid white;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        background-color: rgb(51, 102, 255)
    }

    .button:active {
        background-color: rgb(51, 102, 255);
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    body {
        /* background-image: url("5.jpeg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100%; */
        background: rgb(63, 239, 241);
        background: linear-gradient(0deg, rgba(63, 239, 241, 1) 0%, rgba(252, 212, 125, 1) 87%);
    }
    </style>
</head>

<body>
    <h1>Welcome <?php echo  $_SESSION['user_name'] ?></h1>
    <?php echo "<br><br>"; ?>
    <form action="attendence.php" method="get" id="one"></form>
    <form action="courseregistered.php" method="get" id="two"></form>
    <form action="unregcourses.php" method="get" id="three"></form>
    <form action="logout.php" method="get" id="four"></form>

    <div id="ttt">
        <button type="submit" form="one" value="attendence" class="button"> Attendence </button>
    </div>
    <div id="ttt">
        <button type="submit" form="two" value="course registered" class="button"> Course Registered </button>
    </div>
    <div id="ttt">
        <button type="submit" form="three" value="course registration" class="button">Course Registration </button>
    </div>
    <div id="ttt">
        <button type="submit" form="four" value="Sign Out" class="button">Sign Out </button>
    </div>


</body>

</html>