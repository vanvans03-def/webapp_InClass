<?php
session_start();
$id = $_SESSION['id'];



session_destroy();
header('location:index.php');
exit(0);
if(empty($_SESSION['id'])){
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
    <title>Document</title>
</head>
<body>
  
</body>
</html>