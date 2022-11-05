<?php 
session_start();
if(empty($_SESSION['role'])){
    header('location:index.php');
    exit(0);
}else{
    if($_SESSION['role'] == 'a'){
        $id = $_GET['id'];
        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
        $deletestmt = $conn->query("DELETE post,comment FROM post 
        INNER JOIN comment 
        ON comment.`post_id` = post.`id`
        WHERE post.`id` = $id ");
        $deletestmt->execute();

        if ($deletestmt) {
            echo "<script>alert('Data has been deleted successfully');</script>";
            header("refresh:1; url=index.php");
        }else{
            die('Error : ('.$conn->errno.')'.$conn->error);
        }
      $conn = null;
    }else{
       
        header('location:index.php');
        exit(0);
        
    }
}

?>