<html>
<style>
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

td {
    padding-left: 30px;
}
</style>

<body>
    <table width="800" border="1" align="center">
        <tr>
            <td>
                <h1 align="center"><strong>Register the Faculty</strong></h1>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <form action="insertfaculty.php" method="POST">
                        <table>
                            <tr>
                                <td colspan=2>
                                    <div align="center"><strong>Enter the member information</span></strong></div>
                                </td>
                            </tr>
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
                                <td>Course code</td>
                                <td><input type="txt" name="course_code" required /></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" required /></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <div align="center">
                                        <button type="submit" name="btnsubmit">Add Faculty</button>
                                        &nbsp;&nbsp;
                                        <button type="reset" name="btnreset">Reset</button>
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