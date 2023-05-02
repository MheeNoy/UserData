<?php
require "connect/connection.php";
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
        
    
    
    if(!isset($_POST['Product'])){
      
      echo "กรุณาตรวจสอบความถูกต้อง";

    }else {

      

       
            

    
        

        $sql = "INSERT INTO `food_sales_1` (`OrderDate`,`Region`, `City`, `Category`, `Product`, `Quantity`, `UnitPrice`, `TotalPrice`) 
        VALUE ('$OrderDate','$Region','$City','$Category','$Product','$Quantity','$UnitPrice','$TotalPrice')";
        }

        //  $sql = "INSERT INTO `tb_` (`id_`,`Type_`, `Name_`, `Price`, `Stock_`, `Image`, `details`, `Date`,`Use_`) 
        //VALUE ('$id','$type','$Name','$price','$Stock','$img','$details','$DATE','$use')";






// ตรวจสอบการบันทึกลงฐานข้อมูล
if (mysqli_query($connect, $sql)) {
  echo "";
 } else {
  echo "ข้อผิดพลาด ไม่สามารถเข้าถึงฐานข้อมูล: " . $sql . "<br>" . mysqli_error($conn);
 }

 ?>
  <a href="test.php"><h1>กลับหน้าเดิม</h1></a>