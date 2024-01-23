<html>

<head>
    <style>
    body {
        background: rgb(116, 122, 124);
        background: linear-gradient(0deg, rgba(116, 122, 124, 1) 23%, rgba(93, 92, 89, 1) 66%);
    }

    h1,
    h2 {
        padding-top: 15px;
        text-align: center;
    }

    table {
        position: relative;
        top: 10%;
        left: 30%;
        margin-top: 30px;
        width: 15cm;
        height: auto;
        align: center;
        border-radius: 10px;
    }

    table,
    th,
    td {
        border: 2.5px solid black;
        font-size: 18px;
    }

    tr {
        background-color: rgba(100%, 100%, 100%, 0.6);
    }

    th {
        background-color: rgb(255, 71, 26);
        color: rgb(100, 100, 100);
        border-radius: 10px;
        font-family: Georgia, serif;

    }

    td {
        border-radius: 10px;
        font-family: monospace;
        padding-left: 35px;
        /* border-collapse:collapse; */

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
    }
    </style>
</head>

<body>

    <h1 align:center><strong>Faculty Registration</strong></h1>
    <br><br>
    <h2 align:center><strong>Enter your information</strong></h2>

    <div align:center>
        <form action="facdata.php" method="POST">
            <table>
                <tr>
                    <td width="160">Name</td>
                    <td width="222"><input type="text" name="name" required /></td>
                </tr>
                <tr>
                    <td width="160">Faculty ID</td>
                    <td width="222"><input type="text" name="faculty_id" required /></td>
                </tr>

                <tr>
                    <td width="160">Department</td>
                    <td width="222"><input type="text" name="department" required /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required /></td>
                </tr>
                <tr>
                    <td>Phone number</td>
                    <td><input type="text" name="Phone_number" required /></td>
                </tr>
                <tr>
                    <td>Course Code</td>
                    <td><input type="text" name="course_code" required /></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div align:center>
                            <button type="submit" style="margin-left:50px">Send Request</button>
                            &nbsp;&nbsp;
                            <button type="reset" style="margin-left:100px">Reset</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </td>
    </tr>
    </table>

</body>



</html>