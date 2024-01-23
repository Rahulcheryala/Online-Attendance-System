<!DOCTYPE html>
<html>

<head>
    <title>Student Search</title>

    <style>
    table,
    th,
    td {
        border: 3.25px solid black;
        font-size: 18px;
        margin-top: 50px;
    }

    h1 {
        width: 600px;
        padding: 10px;
        border-radius: 20px;
        margin-top: 25px;
        margin-left: 450px;
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

    button {
        background-color: white;
        color: black;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 4px;
        border-radius: 8px;
        border: 3px solid black;
        margin-left: 45%;
    }

    label {
        padding-left: 33%;
        font-size: 25px;
        color: white;
    }

    input {
        top: 0;
        width: 200px;
    }
    </style>
</head>

<body>
    <form action="search.php" method="post">
        <label for="Student ID">Student ID : </label>
        <input type="text" name="Student_ID" required> <br> <br>
        <button type="Search" value="Search">Search</button>
    </form>

    <?php
    include('initiation.php');
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {


        $student = mysqli_real_escape_string($db,$_POST['Student_ID']);

        $sql = "SELECT * FROM student_login WHERE username = '$student'";
        $result = mysqli_query($db,$sql);

        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            echo "<h1>Student's Info<br></h1>";
            $data="SELECT * FROM student_info WHERE `Roll no`= '$student'" ;
            $rs = mysqli_query($db,$data);
            $num = mysqli_num_rows($rs);
            if($num == 1)
            {
                echo "<table><tr><th>Roll no</th><th>Name</th><th>Branch</th><th>DOB</th><th>Email</th></tr>";
                while($row = $rs->fetch_assoc())
                {
                    echo "<tr><td>" . $row["Roll no"] .   "</td><td>"    . $row["Name"] .   "</td><td>"    . $row["Branch"] .   "</td><td>". $row["DOB"] ."</td><td>". $row["Email"] . "</td></tr>";
                    echo "</table>";
                }
            }
            $sql = "SELECT * FROM cs201 WHERE `Roll no` = $student";
            $result = $db->query($sql);
            echo "<h1>Student's Attendence<br></h1>";
             echo "<table style='height:6cm;'><tr><th>Course Code</th><th>Course</th><th>Attendance Percentage</th></tr>";
            if( $row = $result->num_rows > 0)
            {
                 $s1 = "SELECT `course` FROM `courses` WHERE `Course code` = 'cs201' ";
                 $r1 = $db->query($s1);
                while ($row1 = $r1->fetch_assoc())
                {
                   echo "<tr><td>CS201</td>"."   <td>".$row1['course']."</td>   ";
                }
                while($row = $result->fetch_assoc())
                {
                    echo " <td>".$row['Attendance Percentage']."</td></tr>  ";
                }
            }

            $sql = "SELECT * FROM cs211 WHERE `Roll no` = $student";
            $result = $db->query($sql);

            if( $row = $result->num_rows > 0)
            {
               $s2 = "SELECT `course` FROM `courses` WHERE `Course code` = 'cs211' ";
                $r2 = $db->query($s2);
                while ($row2 = $r2->fetch_assoc())
                {
                    echo "<tr><td>CS211</td>"."  <td>".$row2['course']."</td>  ";
                }
                while($row = $result->fetch_assoc())
                {
                    echo "<td>".$row['Attendance Percentage']."</td></tr>  ";
                }
            }

            $sql = "SELECT * FROM ee103 WHERE `Roll no` = $student";
            $result = $db->query($sql);

            if( $row = $result->num_rows > 0)
            {
                 $s3 = "SELECT `course` FROM `courses` WHERE `Course code` = 'ee103' ";
                $r3 = $db->query($s3);
                while ($row3 = $r3->fetch_assoc())
                {
                    echo "<tr><td>EE103</td>"."  <td>".$row3['course']."</td>  ";
                }
                while($row = $result->fetch_assoc())
                {
                    echo "<td>".$row['Attendance Percentage']."</td></tr>  ";
                }
            }

            $sql = "SELECT * FROM ph105 WHERE `Roll no` = $student";
            $result = $db->query($sql);

            if( $row = $result->num_rows > 0)
            {
                $s4 = "SELECT `course` FROM `courses` WHERE `Course code` = 'ph105' ";
                $r4 = $db->query($s4);
                while ($row4 = $r4->fetch_assoc())
                {
                    echo "<tr><td>PH105</td>"."  <td>".$row4['course']."</td>  ";
                }
                while($row = $result->fetch_assoc())
                {
                    echo "<td>".$row['Attendance Percentage']."</td></tr>   ";
                }
            }

            $sql = "SELECT * FROM me101 WHERE `Roll no` = $student";
            $result = $db->query($sql);

            if( $row = $result->num_rows > 0)
            {
                $s5 = "SELECT `course` FROM `courses` WHERE `Course code` = 'me101' ";
                $r5 = $db->query($s5);
                while ($row5 = $r5->fetch_assoc())
                {
                    echo "<tr><td>ME101</td>"."  <td>".$row5['course']."</td>  ";
                }
                while($row = $result->fetch_assoc())
                {
                    echo "<td>".$row['Attendance Percentage']."</td></tr>  ";
                }
            }

        }

        else
        {
            echo '<script>alert("The student login Id you have entered does not exist")</script>' ;
        }
    }



    ?>



</body>

</html>
