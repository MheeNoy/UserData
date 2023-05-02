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
<form action ="<?=$_SERVER['PHP_SELF'];?>" method = "post" class="d-flex">

<input class="form-control me-1 align-content-between w-50" type="text" name="searchs" placeholder="Search" aria-label="Search">


<button class="btn btn-outline-danger" type="submit"><b>Search</b></button>
</form>
  <table class="table bg-danger ">
  
          <thead>
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
    </thead>
    <?php
    require "connect/connection.php";
isset($_POST['searchs']) ? $search = $_POST['searchs'] : $search = "";
if(!empty($search)){
    $connect = $conn;
    mysqli_query($connect , "SET NAME UTF8");
    $sqll = "SELECT * FROM food_sales_1 WHERE Product LIKE'%".$search."%'";
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

    $dd = mysqli_connect("localhost","root","","test");
    mysqli_query($dd , "SET NAME UTF8");
    $sqll1 = "SELECT * FROM food_sales_1 WHERE City LIKE'%".$search."%'";
    $q1 = mysqli_query($dd ,$sqll1);   
  while($Re = mysqli_fetch_assoc($q1)){
    
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
{
    $dd = mysqli_connect("localhost","root","","test");
    mysqli_query($dd , "SET NAME UTF8");
    $sqll2 = "SELECT * FROM food_sales_1 WHERE Region LIKE'%".$search."%'";
    $q2 = mysqli_query($dd ,$sqll2);   
  while($Re = mysqli_fetch_assoc($q2)){
    
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
{
    $dd = mysqli_connect("localhost","root","","test");
    mysqli_query($dd , "SET NAME UTF8");
    $sqll2 = "SELECT * FROM food_sales_1 WHERE Category LIKE'%".$search."%'";
    $q3 = mysqli_query($dd ,$sqll2);   
  while($Re = mysqli_fetch_assoc($q3)){
    
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
{
  $dd = mysqli_connect("localhost","root","","test");
  mysqli_query($dd , "SET NAME UTF8");
  $sqll2 = "SELECT * FROM food_sales_1 WHERE OrderDate LIKE'%".$search."%'";
  $q4 = mysqli_query($dd ,$sqll2);   
while($Re = mysqli_fetch_assoc($q4)){
  
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
  
  echo "</td></tr>";}}
  

     
  
 

?>
</table>
<a href="test.php"><h1>กลับหน้าเดิม</h1></a>
</body>
</html>