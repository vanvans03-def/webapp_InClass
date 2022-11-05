<?php
session_start();

if(isset($_SESSION['id'])){
  header("Location:index.php");
  exit(0);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
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
    <div class="container">
        <form action="verify.php" method="post">
            <h1 class="Center">Teera Webboard</h1>
            <hr />
            <?php include "nav.php" //userLogin passwordLogin ?>
            <br>

            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card text-dark bg-light">
                        <?php 
        if(isset($_SESSION['errormsg'])){
          ?>
                        <div class="alert alert-danger" role="alert">ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>
                        <?php
        }unset($_SESSION['errormsg']);
        ?>
                        <div class="card-header fw-bold">เข้าสู่ระบบ</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="userLogin">Login:</label>
                                <input type="text" name="userLogin" class="form-control mt-2">
                            </div>
                            <div class="form-group mb-3">
                                <label for="userPassword " class="form-label">Password:</label>
                                <div class="input-group">
                                <input type="password" name="passwordLogin" id="password" class="form-control">
                                    <span class="input-group-text" onclick="pass_show_hide()">
                                        <i class="bi bi-eye-fill" id="showEye"></i>
                                        <i class="bi bi-eye-slash-fill d-none" id="hideEye"></i>
                                    </span>
                                </div>
                            </div>
                            <center>
                                <button class="btn btn-secondary btn-sm mt-3 ">เข้าสู่ระบบ</button>
                            </center>

                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <p class="Center">
                ถ้ายังไม่ได้เป็นสมาชิก<span><a href="register.php">กรุณาสมัครสมาชิก</a></span>
            </p>
        </form>
    </div>
</body>
<script>
  function pass_show_hide(){
    let x = document.getElementById("password");
    let show_eye = document.getElementById("showEye");
    let hide_eye = document.getElementById("hideEye");
    hide_eye.classList.remove("d-none");

    if(x.type === "password"){
      x.type ="text";
      show_eye.style.display="none";
      hide_eye.style.display="block";
    }else{
      x.type ="password";
      show_eye.style.display="block";
      hide_eye.style.display="none";
    }
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>