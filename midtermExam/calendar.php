<?php

$mounth = $_POST['mounth'];
$years = $_POST['years'];
$datestart = $_POST['datestart'];
$mounths = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤภาคม","มิถุนายน","กรกฏาคม","สิงหารคม","กันยายน","ตุลาคม","พฤษจิกายน","ธันวาคม");
$indexM = $mounth-1;
$dateInMounth = 31;
$mounthName = $mounths[$mounth-1];
$modyears = $years%4; // ปี 29 วัน mod = 3
$daysName = array("วันจันทร์","วันอังคาร","วันพุธ","วันพฤหัสบดี","วันศุกร์","วันเสาร์","วันอาทิตย์");
$daysStart=0;
for($i = 0 ; $i <= 6 ; $i++){
    if($daysName[$i] == $datestart){
        $daysStart =$i+1;
    }
}




if( $indexM == "3" or $indexM == "5" or $indexM == "8" or $indexM == "10"  ){//3 5 8 10
    $dateInMounth = 30;
} elseif( $indexM == "1" && $modyears != "3"){
    $dateInMounth = 28;
}elseif($indexM == "1" && $modyears == "3"){
    $dateInMounth = 29;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendar</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    </style>
</head>

<body>
    <?php
    
   
    echo "เดือน ".$mounthName." ปี ".$years." มี ".$dateInMounth." วัน "."<BR>";
    echo "วันที่ 1 ของเดือนตรงกับวัน ".$datestart
    //echo $mounth." ".$years." ".$datestart."--> ".$mounthName;

    

?>
    <table>
        <tr>
            <th>จ.</th>
            <th>อ.</th>
            <th>พ.</th>
            <th>พฤ.</th>
            <th>ศ.</th>
            <th>ส.</th>
            <th>อา.</th>
        </tr>

        <?php
    for($i = 1 ; $i <= 35 ; $i++){
        $count = $i;
        if($i%7 ==0){
        echo "<tr>";
           for($j = 1 ; $j <= 7 ; $j++){
            echo "<td>";
            
            if( $count == $datestart)
            {
              
                for($k = $datestart ; $k <= $dateInMounth ; $k++){
                    echo $k; 
                }
            }
            echo"</td>";
           }
            echo "</tr>";
        
        }}

?>

    </table>


</body>

</html>