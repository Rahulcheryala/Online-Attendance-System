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
                <h1 align="center"><strong>Register the Student</strong></h1>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <form action="insertstudent.php" method="post">
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
                                <td width="160">Roll no</td>
                                <td width="222"><input type="text" name="rollno" required /></td>
                            </tr>
                            <tr>
                                <td width="160">DOB</td>
                                <td width="222"><input type="text" name="DOB" required /></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" required /></td>
                            </tr>
                            <tr>
                                <td>Branch</td>
                                <td><input type="text" name="branch" required /></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" required /></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div align="center">
                                        <button type="submit" name="btnsubmit">Add Student</button>
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