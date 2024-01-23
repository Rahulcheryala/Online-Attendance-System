<!DOCTYPE html>
<html>

<head>
    <title>Faculty List </title>

    <style>
    table,
    th,
    td {
        border: 3.25px solid black;
        font-size: 18px;
        margin-top: 50px;
    }

    h1 {
        width: 400px;
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
        height: 9cm;
        align: center;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <?php
include('initiation.php');
echo "<br><br>";

echo "<h1>Faculty List <br></h1>";
$sql = "SELECT * FROM faculty_info";
$result = $db->query($sql);
if ($result->num_rows > 0 ){
  echo "<table><tr><th>FACULTY NAME</th><th>FACULTY ID</th><th>EMAIL</th><th>DEPARTMENT</th></tr>";
{
  while ( $row = $result->fetch_assoc() )
  {
    echo "<tr><td>"  . $row["Name"] . " </td><td>"      . $row["Faculty ID"] . "  </td><td>"     . $row["email"] . "   </td><td>"    . $row["Department"] ."</td></tr>";
  }
  echo "</table>";
}
}
else {
   echo "0 results";
 }
?>

</body>

</html>