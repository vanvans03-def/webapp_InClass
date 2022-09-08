<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
    <style>
       .loginLink{
        float: right;
       }
    </style>
</head>
<body>
    <form>
    <h1>Teera Webboard</h1>
    <hr>
    <p>หมวดหมู่
        <select name="option">
            <option value="1">--ทั้งหมด--</option>
            <option value="2">เรื่องทั่วไป</option>
            <option value="3">เรื่องเรียน</option>
        </select>
        <span class="loginLink"><a href="login.html">เข้าสู่ระบบ</a></span>
    </p>
    <ul>
        <?php
        for ($i = 1 ; $i <= 10 ; $i++){
            ?>
        <li><a href="post.php?id=<?php echo $i?>" >กระทู้ที่ <?php echo $i?></a></li>
      <?php 
       }
       ?>
    </ul>
</form>
</body>
</html>