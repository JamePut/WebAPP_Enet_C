<?php
    session_start();
    if(isset($_SESSION["id"])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type=“text/css”>
        p {
            border: 1px solid black;
            padding: 2px;
            margin: 40px;
        }
            </style>
</head>
<body>
    <h1><center>Webboard JamePut</center></h1>
    <hr>
    <center><form action="verify.php" method="post">
        <table style="border: 2px solid black; width: 40px;" align="center">
            <tr><td style="background-color: #6cd2fe;" colspan="2">เข้าสู่ระบบ</td></tr>
            <tr><td>Login</td><td><input type="text" name="login" size="40"></td></tr>
            <tr><td>Password</td><td><input type="text" name="password" size="40"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
        </table>
    </form> <br>
    ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php" target=""> กรุณาสมัครสมาชิก </a></center><br>
</body>
</html>