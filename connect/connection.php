<?php 

// ตั้งค่าตัวแปรข้อมูลสำหรับติดต่อฐานข้อมูล
 $servername = "localhost"; // ติดต่อ Server
 $username = "root"; // ชื่อผู้ใช้ เข้าใช้งานฐานข้อมูล MySQL
 $password = ""; // รหัสผ่าน เข้าใช้งานฐานข้อมูล MySQL
 $dbname = "Dataname"; // ชื่อฐานข้อมูล MySQL
if(mysqli_connect($servername, $username,$password,$dbname)){

    echo "เชื่อมต่อสำเร็จ";
}
else{
    echo "เชื่อมต่อไม่ได้";
}
 // ติดต่อฐานข้อมูล
 $conn = mysqli_connect($servername, $username,$password,$dbname);

 
 ?>