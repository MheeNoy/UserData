<html>
<!DOCTYPE html>

<head>
<meta charset="UTF8">
<link a href ="bootstrap-5.1.3/css/bootstrap.css" rel="stylesheet"> 
<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src ="bootstrap-5.1.3/js/bootstrap.js"></Script>
<script src ="bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
<script src = "https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
<table class="table bg-danger ">
   <tr>
   <th scope ="col">OrderDate</th>
        <th scope ="col">Region</th>
        <th scope="col ">City</th>
        <th scope="col">Category</th>
        <th scope="col">Product</th>
        <th scope="col">Quantity</th>
        <th scope="col">UnitPrice</th>
        <th scope="col">TotalPrice</th>
   </tr>

<?php
require "connect/connection.php";
  $date = isset($_POST['date']);
  $connect = $conn;
  
  if(!empty($date)){
   
    
    //$sqll = "SELECT * FROM food_sales_1 WHERE OrderDate => '$date 00:00:00' AND date =< '$date 23:59:59'";
    $sqll = "SELECT * FROM food_sales_1 WHERE `OrderDate` LIKE '$date%'";
      
    $q = mysqli_query($connect ,$sqll);   
    while($Re = mysqli_fetch_assoc($q)){
      
      echo "<tbody>";
      echo "<tr class ='table-info'>";
      echo "<td>".$Re['OrderDate']."</td>";
      echo "<td>".$Re['Region']."</td>";
      echo "<td>".$Re['City']."</td>";
      echo "<td>".$Re['Category']."</td>";
      echo "<td>".$Re['Product']."</td>";
      echo "<td>".$Re['Quantity']."</td>";
      echo "<td>".$Re['UnitPrice']."</td>";
     
      echo "<td>".$Re['TotalPrice']."</td>";
      
      echo "</td></tr>";}
    
     
    } 
    ?>
    </table>
<a href="test.php"><h1>กลับหน้าเดิม</h1></a>
</body>
</html>