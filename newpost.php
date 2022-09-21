<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard JamePut</title>
</head>
<?php
    if(!isset($_SESSION["id"])){
        header("location:index.php");
        die();
    }else{
?>
    <body>
        <h1><center>Webboard JamePut</center></h1>
        <hr>
        <?php
            echo "ผู้ใช้ : ".$_SESSION["username"]."<br>";
        ?> 
        <table>
            <tr><td>หมวดหมู่ :</td>
            <td><select name="category"><option value="all">-- ทั่งหมด --</option>
                                    <option value="general">เรื่องทั่วไป</option>
                                    <option value="study">เรื่องเรียน</option>
            </select></td></tr>
            <tr><td>หัวข้อ :</td><td><input type="text" name="topic"></td></tr>
            <tr><td>เนื้อหา :</td><td><textarea name="message" cols="21" rows="2"></textarea></td></tr>
            <tr><td></td><td><input type="submit" value="บึนทึกข้อความ"></td></tr>
    </table>
    </body>
    <?php
    }
    ?>
</html>