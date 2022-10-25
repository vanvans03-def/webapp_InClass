<?php
if(isset($_SESSION['id'])){

?>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#D3D3D3">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="bi bi-house-door"></i> Home</a>
    
    
      <ul class="navbar-nav">
        <li class="nav-item">
            <div class="dropdown">
                <a class="btn btn-outline-secondary dropdown-toggle btn-sm" id="dropdown1" type="button"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i> 
            
            <?php echo $_SESSION['username'];?></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown1">
                <li><a href="logout.php" class="dropdown-item"><i class="bi bi-power"></i> ออกจากระบบ</a></li>
            </ul>
            </div>
        
         </li>
       
      </ul>
    </div>
</nav>

<?php

}else{
?>


<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#D3D3D3">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="bi bi-house-door"></i> Home</a>
    
    
      <ul class="navbar-nav">
        <li class="nav-item">
            <div class="dropdown">
                <a class="btn btn-outline-secondary dropdown-toggle btn-sm" id="dropdown1" type="button"
                data-bs-toggle="dropdown" aria-expanded="false" ><i class="bi bi-person-circle"></i> 
            
            เข้าสู่ระบบ</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown1">
                <li><a href="login.php" class="dropdown-item"><i class="bi bi-person"></i> เข้าสู่ระบบ</a></li>
            </ul>
            
            </div>
        
         </li>
       
      </ul>
    </div>
</nav>

<?php

}
?>