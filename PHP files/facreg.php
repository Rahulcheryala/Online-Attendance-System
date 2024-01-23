<!DOCTYPE html>
<html>

<head>
    <title>
        Register a Faculty
    </title>
    <style>
    body {
        background: rgb(144, 225, 144);
        background: linear-gradient(90deg, rgba(144, 225, 144, 1) 19%, rgba(121, 159, 226, 1) 100%, rgba(68, 170, 208, 1) 100%);
    }

    table,
    th,
    td {
        border: 3.25px solid black;
        font-size: 18px;
        margin-top: 10px;
    }

    td {
        padding-right: 20px;
    }
    </style>
</head>

<body>

    <?php
include("initiation.php");
session_start();

echo "<h3>Requests for the Faculty Registration :</h3>";

$sql = "SELECT * FROM facreq WHERE 1";
$result = mysqli_query($db,$sql);

echo "<table><tr><th>Name</th><th>Facuty ID</th><th>Department</th><th>Email</th><th>Phone Number</th><th>Course Code</th></tr>";

if($row = $result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row['Name']."</td><td>".$row['Faculty id']."</td><td>".$row['Department']."</td>";
        echo "<td>".$row['Email']."</td><td>".$row['Phone number']."</td><td>".$row['Course code']."</td>"."<br>";
    }
}
echo "</table>"; 
include('facultyregistration.php');
?>

</body>
<html>