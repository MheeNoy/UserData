<?php
require "connection.php";

$connect =$conn;

$sql = "SELECT * FROM collactionName ";
mysqli_set_charset($connect,'utf8');

$result = mysqli_query($connect, $sql); 

if($result){
    echo "connection compelete";
}else{
    echo "Cannot connecnted ";
}



?>