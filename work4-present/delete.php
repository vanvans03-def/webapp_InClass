<?php 
session_start();
if(empty($_SESSION['role'])){
    header('location:index.php');
    exit(0);
}else{
    if($_SESSION['role'] == 'a'){
        $id = $_GET['id'];
        echo "ลบกระทู้ หมายเลข ".$id;
    }else{
       
        header('location:index.php');
        exit(0);
        
    }
}

?>