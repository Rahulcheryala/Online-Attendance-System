<!DOCTYPE html>
<html>

<head>
    <title>CS201 Students</title>

    <style>
    table,
    th,
    td {
        border: 3.25px solid black;
        font-size: 18px;
        margin-top: 50px;
        text-align: center;
    }



    h1 {
        width: 450px;
        padding: 10px;
        border-radius: 20px;
        margin-top: 25px;
        margin-left: 550px;
        color: white;
        font-family: Garamond;
        text-align: center;
        font-size: 50px;
    }

    th {
        background-color: rgb(0, 255, 153);
        color: #003333;
        border-radius: 10px;
        font-family: Georgia, serif;
    }

    body {
        background-repeat: no-repeat;
        background-size: 100%;
        background-image: url("7.jpeg");
    }

    tr {
        background-color: rgba(240, 240, 240, 0.6)
    }

    td {
        border-radius: 10px;
        font-family: monospace;
        padding-left: 25px;
    }

    table {
        margin: auto;
        width: 25cm;
        height: auto;
        align: center;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <?php
include('initiation.php');
session_start();
$name = $_SESSION['login_user'];

    echo "<br><h1>CS201 Students List <br></h1>";
    $sql = "SELECT * FROM cs201";
    $result = mysqli_query($db,$sql);
    echo "<table><tr><th>Roll no</th><th>Total Classes</th><th>Classes Attended</th><th>Attendance percentage</th></tr>";

    if($row = $result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
        echo "<tr><td>".$row['Roll no']."</td><td>".$row['totalclasses']."</td><td>".$row['classesattended']."</td><td>".$row['Attendance Percentage']."</td><tr>";
      }
    }
    else
    {
      echo "No Results Found";
    }
     ?>
</body>

</html>