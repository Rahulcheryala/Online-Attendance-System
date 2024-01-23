<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>
        Details
    </title>

    <style>
        #myDIV {
        position: absolute;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        padding-left: 450px;
        font-size: 28px;
        color: black;
        bottom: 120px;
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
    </style>
</head>

<body>
    <?php
        include("initiation.php");
        session_start();

        echo "<h1>Your Details<br></h1> ";
        $sql = " SELECT * FROM medical_history WHERE `Faculty ID` =  $nma ";
        $result = $db->query($sql);
    ?>


     <div id="myDIV">
        <span>Want to Update your Details ?</span>
    </div>

    <form action="update.php" method="POST">
        <button type="submit" value="submit" class="button1">Yes</button>
    </form>

    <form action="existinguser.php" method="POST">
        <button type="submit" value="submit" class="button1">No</button>
    </form>
    
</body>       

