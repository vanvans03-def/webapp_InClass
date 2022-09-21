
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <style>
      .borderLogin {
        border: 2px solid black;
        border: 2px solid black;
        margin-left: auto;
        margin-right: auto;
      }
      .headerLoginForm {
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
      <form action="verify.php" method="post">
        <h1 class="Center">Teera Webboard</h1>
        <hr />

        <table class="borderLogin">
          <tr>
            <td class="headerLoginForm" colspan="2">เข้าสู่ระบบ</td>
          </tr>
          <tr>
            <td>Login</td>
            <td><input type="text" name="userLogin" /></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="passwordLogin" /></td>
          </tr>
          <tr>
            <td class="Center" colspan="2">
              <button>Login</button>
            </td>
          </tr>
        </table>
        <p class="Center">
          ถ้ายังไม่ได้เป็นสมาชิก<span
            ><a href="register.html">กรุณาสมัครสมาชิก</a></span
          >
        </p>
      </form>
    </div>
  </body>
</html>
