<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>
        Home page
    </title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    a:link {
        color: rgba(51, 51, 0, 1);
    }

    a:hover {
        color: rgba(240, 51, 0, 1);
    }

    a:active {
        color: yellow;
    }

    h1 {
        text-align: center;
        background-color: white;
        width: 800px;
        padding: 10px;
        border: 4px solid rgba(230, 82, 89, 0.9);
        border-radius: 18px;
        margin: auto;
        margin-top: 35px;
        margin-bottom: 15px;
        font: verdana;
    }

    h2 {
        background-color: rgba(220, 220, 220, 1);
        height: 35px;
        width: 250px;
        padding: 10px;
        border: 4px solid rgba(51, 51, 0, 1);
        border-radius: 10px;
        margin: auto;
        text-align: center;
    }

    p {
        color: rgba(231, 82, 89, 1);
        font-size: 20px;
        margin-top: 40px;
    }

    .column {
        float: left;
        width: auto;
        margin-top: 30px;
        margin-left: 85px;
        padding: 10px;
        height: 340px;
        border: 5px solid rgba(51, 51, 0, 1);
        border-radius: 25px;
        background-color: rgba(180, 180, 180, 0.8);
    }

    .column h2 a {
        text-decoration: none;
    }

    #myDIV {
        position: absolute;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        padding-left: 450px;
        font-size: 28px;
        color: black;
        bottom: 120px;
    }

    #DIV {
        position: absolute;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        padding-left: 450px;
        font-size: 28px;
        color: black;
        bottom: 45px;
    }

    .button1 {
        position: relative;
        margin-left: 890px;
        margin-top: 45px;
        padding: 5px;
        padding-left: 15px;
        padding-right: 15px;
        font-size: 20px;
        font-family: 'Brush Script MT', cursive;
    }

    .button2 {
        margin-left: 890px;
        margin-top: 35px;
        padding: 5px;
        padding-left: 15px;
        padding-right: 15px;
        font-size: 20px;
        font-family: 'Brush Script MT', cursive;
    }

    body {
        background-image: url("img1.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100%;
    }

    img {
        display: block;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
        width: 55%;
    }
    </style>
</head>

<body>

    <h1>ONLINE &nbsp ATTENDANCE &nbsp SYSTEM</h1>

    <div>
        <div class="column">
            <img src="student.jpg" alt="Student">
            <h2><a href="studentlogin.php">Login as STUDENT</a></h2>
        </div>
        <div class="column">
            <img src="faculty.jpg" alt="Faculty">
            <h2><a href="facultylogin.php">Login as FACULTY</a></h2>
        </div>
        <div class="column">
            <img src="admin.jpg" alt="Admin">
            <h2><a href="adminlogin.php">Login as ADMIN</a></h2>
        </div>
    </div>
    <div id="myDIV">
        <span>Want to Register as a Student ?</span>
    </div>

    <form action="studentregistration11.php" method="POST">
        <button type="submit" value="submit" class="button1"> Student Registration </button>
    </form>

    <div id="DIV">
        <span>Want to Register as a Faculty ?</span>
    </div>

    <form action="facultyregistration11.php" method="POST">
        <button type="submit" value="submit" class="button2"> Faculty Registration </button>
    </form>

</body>

</html>