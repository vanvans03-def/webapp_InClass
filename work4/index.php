<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
    <style>
    .loginLink {
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
            
            <?php 
        if(isset($_SESSION['username'])){
            ?>
         
            <span class="" style="margin-left: 30px;">ผู้ใช้งานระบบ: <?php  echo $_SESSION['username']?></span>
            <span class="loginLink"><a href="logout.php">ออกจากระบบ</a></span>
    
            <?php
        }else{
            ?>
             <span class="" style="margin-left: 30px;">ผู้ใช้งานระบบ: GUEST</span>
            <span class="loginLink"><a href="login.php">เข้าสู่ระบบ</a></span>
     
            <?php
     
        }
        ?>
</p>

        <div class=""><a href="newpost.php" class="">สร้างกระทู้ใหม่</a></div>
        <ul>

            <?php
        for ($i = 1 ; $i <= 10 ; $i++){
            ?>
            <li><a href="post.php?id=<?php echo $i?>">กระทู้ที่ <?php echo $i?></a>

                <?php 
                if(empty($_SESSION['role'])){
                   
                }else{

                    if($_SESSION['role'] == 'a'){
                            ?>
                            <a href="delete.php?id=<?php echo $i?>" class="">ลบ</a>
                    <?php
                    }
                }
        ?>
            </li>

            <?php 
       }
       ?>

        </ul>
    </form>
</body>

</html>