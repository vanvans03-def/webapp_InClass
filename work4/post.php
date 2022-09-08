<?php 
 $id = $_GET["id"];
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
        
      }textarea{
        width: 400px;
        height: 100px;
      }

    </style>
</head>
<body>

      <form action="" method="">
        <h1 class="Center">Teera Webboard</h1>
        <hr />
        <h1 class="Center">ต้องการดูกระทู้ที่ <?php echo $id ?></h1>
        <h1 class="Center"><?php echo $oddEven ?></h1>
        <table class="border">
          <tr>
            <td class="headerForm" colspan="2">แสดงความคิดเห็น</td>
          </tr>
          <tr>
            <td class="Center">
            <textarea  ></textarea>
            </td>
            
          
          </tr>
        
          <tr>
            <td class="Center" colspan="2">
              <button>ส่งข้อความ</button>
            </td>
          </tr>
        </table>
       
        </p>
      </form>
   
</body>
</html>