<?php
require "connect/connection.php";
$connect = $conn;

$connect =$conn;
$OrderDate = "";
$Region = "";
$City ="";
$Category ="";
$Product ="";	
$Quantity = "";
$UnitPrice = "";
$TotalPrice	 = "";


$Region = $_POST['Region'];
switch($Region) {
case 1:
    $Region = "East";
  break;
case 2:
    $type = "West";
    break;
  
};


if(!$_POST['Product']){
    echo "<h1>กรุณาใส่ชื่อ</h1>";
    
    }else{
        $Product = $_POST['Product'];
    
    }
if($_POST['Quantity'] < 0){
echo "<h1>กรุณาใส่ราคาอย่างหน่อย 1 บาท  เช่น 1หรือ 1.0</h1>";

}else{
    $Quantity = $_POST['Quantity'];

}
if($_POST['UnitPrice'] < 0.00){
echo "<h1>กรุณาใส่สินค้า อย่างน้อย 0.01</h1>";

}
else {

    $UnitPrice=$_POST['UnitPrice'];
}
if($_POST['TotalPrice'] < $UnitPrice){
    echo "<h1>กรุณาใส่สินค้า มากกว่า UnitPrice  </h1>";
    
    }
    else {
    
        $TotalPrice=$_POST['TotalPrice'];
    }
  if(!$_POST['City']){
    echo "กรุณากรอกCity(เฉพาะตัวอักษรภาษาอังกฤษ)";
  }  else{
    $City =$_POST['City'];
}
if(!$_POST['Category']){
    echo "กรุณากรอกCity(เฉพาะตัวอักษรภาษาอังกฤษ)";
}else{
    $Category =$_POST['Category'];
}
if(!$_POST['OrderDate']){
    echo "กรุณากรอก วัน/เดือน/ปีให้ถูกต้อง";
}else{$OrderDate = $_POST['OrderDate'];
}
        
$sql = "UPDATE `food_sales_1` SET `OrderDate`='$OrderDate',`Region`='$Region',`City`='$City',`Category`='$Category',`Product`='$Product',`Quantity`='$Quantity',`UnitPrice`='$UnitPrice',`TotalPrice`='$TotalPrice' WHERE `OrderDate` = '$OrderDate' and `Product` = '$Product' ";






//$date = date("d/m/y<br>");
//$sql = "UPDATE `tb_` SET Name_='$Name', Image ='$image', Price =$pice, Stock_=$stock, details = '$details', Date = '$date'   Where  Number_ = $Number ";
 if (mysqli_query($conn, $sql)) {
  echo "แก้ไขข้อมูลลงฐานข้อมูลเรียบร้อย";
 } else {
  echo "ข้อผิดพลาดการแก้ไขข้อมูล: " . mysqli_error($conn);
 }


// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
echo "<h1><a href ='test.php'>กลับหน้าเดิม</a></h1>";
?>