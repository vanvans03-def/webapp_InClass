<?php
session_start();

if(isset($_SESSION['id'])){
  header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page</title>
    <style>
      .borderRegister {
        border: 2px solid black;
        margin-left: auto;
        margin-right: auto;
      }
      .headerRegister {
        background-color: #6cd2fe;
      }
      .Center {
        text-align: center;
      }
      .mainContainer {
        margin: auto;
        width: 40%;
      }
    </style>
  </head>
  <body>
    <div class="mainContainer">
      <form action="">
        <h1 class="Center">สมัครสมาชิก</h1>
        <hr />

        <table class="borderRegister">
          <tr>
            <td class="headerRegister" colspan="2">กรอกข้อมูล</td>
          </tr>
          <tr>
            <td>ชื่อบัญชี :</td>
            <td><input type="text" name="user" /></td>
          </tr>
          <tr>
            <td>รหัสผ่าน :</td>
            <td><input type="password" name="password" /></td>
          </tr>
          <tr>
            <td>ชื่อ-นามสกุล :</td>
            <td><input type="text" name="fullName" /></td>
          </tr>
          <tr>
            <td>เพศ :</td>
            <td>
              <form>
                <input type="radio" name="gender" value="m" />
                ชาย<br />
                <input type="radio" name="gender" value="f" />
                หญิง<br />
                <input type="radio" name="gender" value="o" />
                อื่นๆ<br />
              </form>
            </td>
          </tr>
          <tr>
            <td>อีเมล :</td>
            <td><input type="text" name="email" /></td>
          </tr>
          <tr>
            <td class="Center" colspan="2">
              <button>สมัครสมาชิก</button>
            </td>
          </tr>
        </table>
        <p class="Center"><a href="index.php">กลับสู่หน้าหลัก</a></p>
      </form>
    </div>
  </body>
</html>
