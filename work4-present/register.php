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
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <style>
    .Center {
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <form action="register_save.php" method="post">
            <h1 class="Center">สมัครสมาชิก</h1>
            <hr />

            <?php include "nav.php"?>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <?php
                if(isset($_SESSION['add_login'])){
                        if($_SESSION['add_login'] == 'success'){
                    ?>
                    <div class="alert alert-success" role="alert">เพิ่มบัญชีเรียบร้อยแล้ว</div>
                    <?php
                    }else{
                        echo "<div class='alert alert-danger' role='alert'>ชื่อบัญชีซ้ำหรือฐานข้อมูลมีปัญหา</div>";
                    }
                }unset($_SESSION['add_login']);
                
                    ?>
                    <div class="card text-dark bg-white border-primary">
                        <div class="card-header bg-primary text-white">กรอกข้อมูล </div>

                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label">ชื่อบัญชี</label>
                                <div class="col-md-9 ">
                                    <input type="text" name="login" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label">รหัสผ่าน</label>
                                <div class="col-md-9 ">
                                    <input type="password" id="password" name="pwd" class="form-control" required>
                                    
                                   
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label">ชื่อ-นามสกุล</label>
                                <div class="col-md-9 ">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label">เพศ</label>
                                <div class="col-md-9 ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="m" />
                                        <label for="" class="form-check-label">ชาย</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="f" />
                                        <label for="" class="form-check-label">หญิง</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="o" />
                                        <label for="" class="form-check-label">อื่นๆ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label">อีเมล</label>
                                <div class="col-md-9 ">
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9 ">
                                    <button class="btn btn-primary btn-sm" type="submit"><i class="bi bi-save"> </i>
                                        สมัครสมาชิก</button>
                                </div>
                            </div>
        </form>
    </div>
    </div>
    </div>
    <div class="col-md-3"></div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>