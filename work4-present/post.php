<?php 
 $id = $_GET["id"];
 session_start();
 if(empty($id)){
    $id="error pls try again";
 }
 $oddEven="";
  if(($id % 2) == 0){
    $oddEven="เป็นกระทู้หมายเลขคู่";
  }else{
    $oddEven="เป็นกระทู้หมายเลขคี่";
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <style>
    .border {
        border: 2px solid black;
        border: 2px solid black;
        margin-left: auto;
        margin-right: auto;

    }

    .headerForm {
        background-color: #6cd2fe;
    }

    .Center {
        text-align: center;
    }

    .mainContainer {
        margin: auto;

    }

    textarea {
        width: 400px;
        height: 100px;
    }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="Center">Teera Webboard</h1>
        <?php include 'nav.php';?>
        <hr />
        <h1 class="Center">ต้องการดูกระทู้ที่ <?php echo $id ?></h1>
        <h1 class="Center"><?php echo $oddEven ?></h1>
        <br>
        <?php 
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql=$conn->query("SELECT  post.`id`,post.`title`,post.`post_date`,post.`content`,user.`id`,user.`name` 
    FROM post JOIN user 
    ON post.`user_id` = user.`id`
    WHERE post.`id` = $id");
    $sql->execute();
    $posts = $sql->fetchAll();
    foreach($posts as $post){

    }
    ?>

        <div class="card text-dark bg-light mb-5">
            <div class="card-header bg-primary text-white"><?php echo $post['title'] ?></div>
            <div class="card-body">
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-12">
                        <?php echo $post['content'] ; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-2">
                        <?php echo $post['name'] ." - ". $post['post_date'] ;?>
                    </div>
                </div>
            </div>
        </div>


        <?php 
            
            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
            $sql=$conn->query("SELECT  comment.`id`,comment.`content`,comment.`post_date`,
            comment.`user_id`,comment.`post_id`,user.`id`,user.`name`
            FROM comment 
            INNER JOIN user 
            ON comment.`user_id` = user.`id`
            WHERE comment.`post_id` = $id");
            $sql->execute();
            $comments = $sql->fetchAll();
            $count = 0;
            foreach($comments as $comment){
              $count = $count+1;
       ?>

        <div class="card text-dark bg-light mb-5">
            <div class="card-header bg-info text-white">ความคิดเห็นที่ <?php echo $count; ?></div>
            <div class="card-body">
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-12">
                        <?php echo $comment['content'] ; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-2">
                        <?php echo $comment['name'] ." - ". $comment['post_date'] ;?>
                    </div>
                </div>
            </div>
        </div>

        <?php
            }
       
            if(isset($_SESSION['id'])){
              
            
          ?>

        <div class="card text-dark bg-light">
            <div class="card-header bg-success text-white">แสดงความคิดเห็น</div>
            <div class="card-body">
                <form action="post_save.php" method="post">
                    <input type="hidden" name="post_id" value="<?= $_GET['id'] ;?>">
                    <div class="row mb-3 justify-content-center">
                        <div class="col-lg-10">
                            <textarea name="comment" id="" class="form-control" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                     
                        <div class="col-lg-12">
                            <center>
                                <button class="btn btn-success btn-sm text-white">
                                    <i class="bi bi-box-arrow-up-right me-1"></i>ส่งข้อความ
                                </button>
                            </center>
                        </div><?php }else{
                          
                        } ?>
                    </div>
                </form>
            </div>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>