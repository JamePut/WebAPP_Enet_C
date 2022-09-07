<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
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
    <center>
        <?php
            $login=$_POST["login"];
            $password=$_POST["password"];
            if($login=="admin" && $password=="ad1234")
                echo "ยินดีต้อนรับคุณ ADMIN";
            elseif($login=="member" && $password=="mem1234")
                echo "ยินดีต้อนรับคุณ MEMBER";
            else
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        ?><br>
        <a href="index.php" target="_blank"> กลับไปหน้าหลัก </a>
    </form>
    </center>
</body>
</html>