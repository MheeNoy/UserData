<?php
require "connect/connection.php";
$connect = $conn;
$Product ="";
$OrderDate ="";

if(!$_POST['Product']){
    echo "กรุณากรอก ชื่อสินค้า ที่ต้องการลบ(เฉพาะตัวอักษรภาษาอังกฤษ)";
}else{
    $Product = $_POST['Product'];
}

if(!$_POST['OrderDate']){
    echo "กรุณากรอก วัน/เดือน/ปี ที่จะลบ ให้ถูกต้อง";
}else{$OrderDate = $_POST['OrderDate'];
}

$sql2 = "DELETE FROM `food_sales_1` WHERE `OrderDate`= '$OrderDate' and `Product` = '$Product'";


mysqli_query($connect, $sql2);



 

 echo "<h1><a href ='test.php'>กลับหน้าเดิม</a></h1>";
// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($connect);
 
?>



