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
    <center>
        ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]."<BR>";
        $id=$_GET["id"];
        if (($id % 2)== 0)
            echo "เป็นกระทู้หมายเลขคู่";
        else
            echo "เป็นกระทู้หมายเลขคี่";
        ?>
        <table style="border: 2px solid black; width: 40%;" align="center">
            <tr><td style="background-color: #6cd2fe;" colspan="2">แสดงความคิดเห็น</td></tr>
            <tr><td><textarea name="message" cols="100" rows="5"></textarea></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table><br>
        <a href="index.php" target=""> กลับไปหน้าหลัก </a></center><br>
    </center>
</body>
</html>