<?php
    $User = $_POST["userLogin"];
    $Password = $_POST["passwordLogin"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
    <style>
    .Center {
        text-align: center;
    }

    .mainContainer {
        margin: auto;
        width: 40%;
    }

    span {
        font-weight: bold;
        color: blue;
    }
    </style>
</head>

<body>
    <div class="">
        <h1 class="Center">Teera Webboard</h1>
        <hr />
        <div class="Center">
            <?php 
          if($User == "admin" && $Password == "ad1234"){
            ?>
            <p>ยินดีต้อนรับคุณ ADMIN</p>

            <?php
          }elseif($User == "member" && $Password == "mem1234"){
          ?>
            <p>ยินดีต้อนรับคุณ MEMEBER</p>
            <?php 
          }else{
            ?>
            <p class="">ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</p>
            <?php
          }
            ?>
        </div>
    </div>

</body>

</html>