<?php
session_start();
if(empty($_SESSION['role'])){
    header('location:index.php');
    exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newpost Page</title>
    <style>
    table,td {
        border: 0;
        border-collapse: collapse;
        padding-top:5px ;
    }
    .Center {
        text-align: center;
      }
    </style>
</head>

<body>
    <h1>Webboard Teera</h1>
    <hr>

    <table>
        <tr>
            <td>ผู้ใช้ :</td>
            <td><?php echo $_SESSION['username']?></td>
        </tr>
        <tr>
            <td>หมวดหมู่ :</td>
            <td>
                <select name="option">
                    <option value="1">--ทั้งหมด--</option>
                    <option value="2">เรื่องทั่วไป</option>
                    <option value="3">เรื่องเรียน</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>หัวข้อ :</td>
            <td>
                <input type="text" name="HeadBorad">
            </td>
        </tr>
        <tr>
            <td>เนื้อหา :</td>
            <td> <textarea name="Content" id="" cols="25" rows="2"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td ><button>บันทึกข้อความ</button></td>
        </tr>
    </table>




</body>

</html>