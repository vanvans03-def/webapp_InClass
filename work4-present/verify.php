<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['id'] == session_id()){
  header("location:index.php");
  exit(0);
}



    $User = $_POST["userLogin"];
    $Password = $_POST["passwordLogin"];
  
    try {
      $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
      
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
      } catch(PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
          }

    $sql = "SELECT * FROM user where login='$User' and password=sha1('$Password')";
    $result=$conn->query($sql);

    if($result->rowCount()==1){
      $data=$result->fetch(PDO::FETCH_ASSOC);
      $_SESSION["username"] = $data["login"];
      $_SESSION["role"] = $data["role"];
      $_SESSION["user_id"] = $data["id"];
      $_SESSION["id"] = session_id();
      header("Location:index.php");
      exit(0);
    }else{
      $_SESSION["errormsg"]="err";
      header("location:login.php");
      exit(0);
    }

    $conn=null;
?>