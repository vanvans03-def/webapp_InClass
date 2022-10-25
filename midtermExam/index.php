<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>

    <form action="calendar.php" method="post">
        <div><span> กรุณากรอกเดือน </span>
            <select name="mounth">

                <?php
            for($i = 1 ; $i <= 12 ; $i++){
                ?>
                <option value="<?php echo $i ?>" ><?php echo $i ?></option>

                <?php

            }
        ?>
            </select>
        </div>
        <div><span>กรุณากรอกปี</span>
            <input type="text" name="years">
        </div>
        <div><span>วันที่ 1 ของเดือนตรงกับ</span>
            <select name="datestart">
                <option value="วันจันทร์">วันจันทร์</option>
                <option value="วันอังคาร">วันอังคาร</option>
                <option value="วันพุธ">วันพุธ</option>
                <option value="วันพฤหัสบดี">วันพฤหัสบดี</option>
                <option value="วันศุกร์">วันศุกร์</option>
                <option value="วันเสาร์">วันเสาร์</option>
                <option value="วันอาทิตย์">วันอาทิตย์</option>
            </select>

        </div>
        <div>
            <button>ตกลง</button>
            <button>ล้างข้อมูล</button>
        </div>
    </form>

</body>

</html>