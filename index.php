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
    ?>
    <body>
        <h1><center>Webboard JamePut</center></h1>
        <hr>
        หมวดหมู่ :
        <select name="category"><option value="all">-- ทั่งหมด --</option>
                                <option value="general">เรื่องทั่วไป</option>
                                <option value="study">เรื่องเรียน</option>
        </select>
        <a href="login.php" target="" style="float:right"> เข้าสู่ระบบ </a> <br>
        <ul><form action="post.php" method="get">
        <?php
            for($i=1; $i<=10; $i++){
                echo "<li><a href=post.php?id="."$i"."> กระทู้ที่ ".$i." </a></li>";
            }
        ?>
        </form></ul>
    </body>
    <?php
    }else{
    ?>
    <body>
        <h1><center>Webboard JamePut</center></h1>
        <hr>
        หมวดหมู่ :
        <select name="category"><option value="all">-- ทั่งหมด --</option>
                                <option value="general">เรื่องทั่วไป</option>
                                <option value="study">เรื่องเรียน</option>
        </select>
        <div style="float:right">
            <?php
                echo "ผู้ใช้งานระบบ : ".$_SESSION["username"];
            ?>
            <a href="logout.php" target=""> ออกจากระบบ </a>
        </div>
        <br>
        <a href="newpost.php" target=""> สร้างกระทู้ใหม่ </a>
        <br>
        <ul><form action="post.php" method="get">
        <?php
            for($i=1; $i<=10; $i++){
                echo "<li>";
                echo "<a href=post.php?id="."$i"."> กระทู้ที่ ".$i."</a>";
                if($_SESSION["role"]=="a"){
                    echo "&nbsp;&nbsp;<a href=delete.php?id="."$i"."> ลบ</a>";
                }
            }
            echo "</li>";
        ?>
    </form></ul>
    </body>
    <?php
    }
    ?>
</html>