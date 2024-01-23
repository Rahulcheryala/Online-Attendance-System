<!DOCTYPE html>

<head>
    <title>Faculty Request</title>
    <style>
    .button {
        align: center;
        background-color: white;
        color: black;
        height: 2cm;
        padding-left: 20px 40px;
        text-align: center;
        font-size: 25px;
        border-radius: 12px;
        border: 4px solid black;
        width: 200px;
    }

    body {
        background: rgb(116, 122, 124);
    }
    </style>

<body>
    <?php
include("initiation.php");

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtid = $_POST['faculty_id'];
$txtdept = $_POST['department'];
$txtnum = $_POST['Phone_number'];
$txtcode = $_POST['course_code'];

$sql = "INSERT INTO facreq (`Name`, `Email`, `Faculty Id`, `Department`,`Phone number`,`Course code`)
VALUES ( '$txtName', '$txtEmail', '$txtid', '$txtdept','$txtnum','$txtcode')";
$result1 = mysqli_query($db,$sql);

if($result1 == TRUE )
{
    echo "<script>alert('Request sent SUCCESSFULLY')</script>";
}
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>

    <form action="logout.php" method="get" id="one"></form>

    <div id="ttt">
        <button type="submit" form="one" value="attendence" class="button"> Back </button>
    </div>

</body>

</html>