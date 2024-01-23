<!DOCTYPE html>
<html>


<head>
    <style>
    h1 {
        padding-top: 10px;
    }

    table {
        position: relative;
        top: 40%;
    }

    button {
        background-color: white;
        color: black;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 2px 2px;
        border-radius: 8px;
        border: 3px solid black;
    }
    </style>
</head>

<body>
    <table border:2px solid black align:center>
        <div>
            <h1 align:center><strong>Course Registration</strong></h1>
        </div>
        <form action="coursereg.php" method="POST">
            <tr>
                <td width="275"> Roll no </td>
                <td width="20"> <input type="text" name="roll_no" required /></td>
            </tr>
            <tr>
                <td> Password </td>
                <td> <input type="password" , name="password" required /></td>
            </tr>
            <tr>
                <td> Course you want to register </td>
                <td> <input type="text" , name="courseregistration" required /></td>
            </tr>
            <tr>
                <td style="text-align:center">
                    <button id="id1" type="submit">Submit</button>
                </td>
                <td style="text-align:center">
                    <button id="id1" type="reset">Reset</button>
                </td>
            </tr>
        </form>
    </table>

</body>

</html>