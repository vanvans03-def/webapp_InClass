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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <style>
    .loginLink {
        float: right;
    }
    </style>
</head>

<body>
    <div class="container">

        <form>
            <h1>Teera Webboard</h1>
            <hr>
            <?php include "nav.php"; 
         ?>
            <div class="d-flex bd-highlight mb-3">
                    <div class="p-2 bd-highlight">หมวดหมู่ :</div>
                    <div class="p-2 bd-highlight">
                        <select name="category" id="" class="form-select">
                            <?php 
                                $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                                $sql = "SELECT * FROM category";
                                foreach($conn->query($sql) as $row){
                                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                                }$conn=null;
                            
                            ?>
                        </select>
                    </div>

                            <?php 
                    if(isset($_SESSION['id'])){
                    ?>
                            <div class="ms-auto p-2 bd-highlight">
                                <span class="">
                                    <a href="newpost.php" type="button" class="btn btn-success btn-sm"><i class="bi bi-plus"></i>
                                        สร้างกระทู้ใหม่</a>
                                </span>
                            </div>
                            <?php } ?>
            </div>

            <table class="table table-striped">

                <?php
                $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");                
                $sql="SELECT t3.name,t1.id,t1.title,t2.login,t1.post_date FROM post as t1
                INNER JOIN user as t2 ON (t1.user_id=t2.id) INNER JOIN category as t3 ON
                (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";

                $result=$conn->query($sql);

                while($row=$result->fetch()){

                $conn=null;
                ?>
                <tr>
                    <td class=""><span class="fw-bold">[ <?php echo $row[0] ?> ]</span>

                        <a style="text-decoration:none" href="post.php?id=<?php echo $row[1] ?>">
                        <?php echo $row[2]; ?>
                    </a>
                        <br><?php echo  $row[3] ." - ". $row[4] ?>

                        <?php 
                if(empty($_SESSION['role'])){
                   
                }else{

                    if($_SESSION['role'] == 'a'){
                            ?>
                    <td>
                        <a href="delete.php?id=<?php echo $row[1] ;?>" class="btn btn-danger btn-sm" type="button"
                            onclick="retunrmyFunc()">ลบ</a>
                    </td>

                    <?php
                    }
                }
        ?>
                    </td>
                </tr>

                <?php 
       
    }
       ?>

            </table>

        </form>
    </div>
</body>

<script>
function retunrmyFunc() {

    let r = confirm("ต้องการลบจริงหรือไม่");
    return r;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>