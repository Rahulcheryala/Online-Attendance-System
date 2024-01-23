<!DOCTYPE html>
<html>

<head>
    <title>
        Register a Student
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

echo "<h3>Requests for the Student Registration :</h3>";

$sql = "SELECT * FROM stureq WHERE 1";
$result = mysqli_query($db,$sql);

echo "<table><tr><th>Name</th><th>Roll No</th><th>DOB</th><th>Email</th><th>Branch</th></tr>";

if($row = $result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {

        echo "<tr><td>".$row['Name']."</td><td>".$row['Roll no']."</td><td>".$row['DOB']."</td>";
        echo "<td>".$row['Email']."</td><td>".$row['Department']."</td><tr>";
    }
}
echo "</table>"; 
include('studentregistration.php');
?>

</body>

</html>