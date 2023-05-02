<!DOCTYPE html>
<html>
<head>
  <meta charset=" UTF8" >
  <meta name ="viewport" content ="width=device-width" initial-scale="1.0">
<link a href ="bootstrap-5.1.3/css/bootstrap.css" rel="stylesheet"> 
<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src ="bootstrap-5.1.3/js/bootstrap.js"></Script>
<script src ="bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
<script src = "https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link a herf ="test.css" rel="stylesheep">
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<style>
*{
    padding: 15px;
    
}
body{
    padding:15px;
}
#shadow{
    box-shadow: 5px 5px 5px ;
}
@media screen and (max-width: 800px) {

#formsearch{
   margin-top: 75px;
   width: 80%;
}
#testt{
    visibility: hidden;
}


     }

@media screen and (max-width: 700px ) {
   #formsearch{
   margin-top: 75px;
   width: 80%;
}

 #testt{
    visibility: hidden;
}
}

</style>
<script type="text/javascript">
  function formprofuct(){
         text= "กรุณากรอกเฉพาะตัวอักษรภาษาอังกฤษ";
          document.getElementByClassName("Productform").innerHTML=text;
          document.getElementById("Productform").style.borderColor ="red";
                     };
         

</script>

<body class ="bg-dark">
    <header>
      <div class ="col-lg-12 col-md-12 col-sm-12">
        <div class ="col-4">
        <button class ="buttonedite btn btn-danger button1" id="shadow">แก้ใข ลบ เพิ่ม </button>
        </div>
        <div class ="col-4 ">
        <button class ="buttondate btn btn-danger text-white button2" id ="shadow" >ค้นหา วัน/เดือน/ปี </button>
      </div>
         <div class ="date col-4 row" style=" float:right; position: absolute; margin-left:25%; margin-top:-20%;">
         <form action ="date.php" method = "post" class="d-flex">
        <label for="date" class="text-white row"><u><h6>Day/Mount/Years: <h6></u></label>
        <input class="date1 btn btn-outline-primary  " type="date" id="day" name="date" value="30" placeholder="date" aria-label="date">
          <br><br>
        <button  class ="buttonsearch btn btn-danger btn-sm" type="submit" >Send </button>
       </form>

   
         </div>
         


         
      

      
      <div class ="col-4">
        <button class ="buttonall btn btn-danger text-white button2" id ="shadow" >ดูข้อมูลทั้งหมด </button>
      </div>
      <div class ="col-4 w-100" id="formsearch" style="margin-top: 5%;"
     >
      
      
      <form  action ="search.php" method = "post" class="d-flex " id="form" >

        <input class="form-control   align-content-between " id="shadow" type="text" name="searchs" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-warning" id="shadow" type="submit"><b>Search</b></button>
         
       </form>
      </div>
      <h6 class ="text-white" id="testt" style ="float:right; position: relative ; text-shadow: 0.5px 0.5px 0.5px ; margin-top:-4%;">สามารถค้นหาวัน/เดือน/ปี ของ Orderสินค้าได้</h6>
     </div>
   </header>
   <aside>
<div id ="tableshow">
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
   require "./connect/Data.php";    

   $Result = $result;
         while($row = mysqli_fetch_assoc($Result)) {
                    echo "<tbody>";
                    echo "<tr class ='table-info'>";
                    echo "<td>".$row['OrderDate']."</td>";
                    echo "<td>".$row['Region']."</td>";
                    echo "<td>".$row['City']."</td>";
                    echo "<td>".$row['Category']."</td>";
                    echo "<td>".$row['Product']."</td>";
                    echo "<td>".$row['Quantity']."</td>";
                    echo "<td>".$row['UnitPrice']."</td>";
                   
                    echo "<td>".$row['TotalPrice']."</td>";
                    
                    echo "</td></tr>";}
                  
                   ?>
            </tbody>
         </table>

         </div>


<div class ="form-data">

        
        <h3 class ="text-warning">กรุณากดปุ่ม </h3>
            <div class=" col-lg-12 col-sm-12 col-md-12 col-xs-12" >
            <button type="button" class="Add btn btn-outline-danger border-3 " id="Add" ><b>เพิ่ม</b></button>

             <button type="button" class="Delete btn btn-outline-primary border-3 " id="Delete"><b>ลบ</b></button>

            <button type="button" class="Edite btn btn-outline-warning border-3 " id="Edite"><b>แก้ใข</b></button>

             </div>


             <div class ="A">  <h1>ADD </h1> 
             <div class ="formCreate">
     <form  action = "add.php" method ="post" enctype ="multipart/form-data">
     
   <table>
   <tr>
         <td><h5 class ="text-danger">Region:</h5></td> 
         <td><select name="Region" class =" bg-danger ">
           <option value ="1" class ="text-white">East</option>
           <option value ="2">West</option>
           
         </select>
         </td>
      </tr>
      <tr>
         <td><h5 class ="bg-white text-dark border-2 ">Name/ชื่อสินค้า:</h5></td> 
         <td><input class="bg-white text-dark"  type = "text" name = "Product" value="Carrot" onfocus="formprofuct()" ></td>
      </tr>
      <p class ="Productform text-danger" ></p>
    
      <tr>
         <td><h5 class ="bg-white text-dark border-2 ">City:</h5></td> 
         <td><input class="bg-white text-dark" type = "text" name = "City" value="Bangkok" ></td>
      </tr>
      <tr>
         <td><h5 class ="bg-white text-dark border-2 ">Category:</h5></td> 
         <td><input class="bg-white text-dark" type = "text" name = "Category" value="Bars" ></td>
      </tr>
      <tr>
         <td><h5 class ="text-primary">Quantity:</h5></td>
         <td><input class ="bg-primary" type = "number" value="999"  name = "Quantity"> </td>
      </tr>
      
      <tr>
         <td><h5 class ="bg-white text-dark border-2 ">UnitPrice:</h5></td>
         <td><input class="bg-white text-dark" type = "number" name = "UnitPrice" value="11.11"></td>
      </tr>
      <tr>
         <td><h5 class ="bg-white text-dark border-2 ">TotalPrice:</h5></td>
         <td><input class="bg-white text-dark" type = "number" name = "TotalPrice" value="1111.11"></td>
      </tr>
      
      <tr>
         <td><h5 class =" text-danger  ">OrderDate:</h5></td>
         <td><input class="bg-danger text-white" type = "date" name = "OrderDate" ></td>
      </tr>
     
      
     
      
      <tr>
         <td>
            <input class ="btn-lg btn-primary" type = "submit" name = "submit" value = "Submit" ></button> 
         </td>
      </tr>
   </table>
      </form>
   </div>
</div>

<div class ="D">
                     
                     <br><center> <h1 class ="text-primary "> <u>Delete </u></center></h1> 
                    
                     <form  action = "Delete.php" method ="post" enctype ="multipart/form-data">
             
             <table>
             <tr>
             <td><h5 class ="text-danger">Product:</h5></td> 
                 <td>
                    <input type="text" class ="border-4 border-primary btn btn-light btn-sm" value ="Whole Wheat" name="Product">
                 </td>
                <tr>
                   <td><h5 class =" text-white border-2 ">วัน/เดือน/ปี:</h5></td> 
  
                   <td>
                   <input class="bg-danger text-white" type = "date" name = "OrderDate" ></td>
                </tr>
                <tr>
                   
              </table>
                <input class ="btn-lg btn-primary" type = "submit" name = "submit" value = "Submit" ></button> 
                      </form>
  
                    
                    </div>

                    <div class ="E">  
                     
                   
                     <br><center> <h1 class ="text-primary "> <u>Edite </u></center></h1>
                     <form method = "post" action = "edite.php" enctype ="multipart/form-data">
                    
                     <table>
   <tr>
         <td><h5 class ="text-danger">Region:</h5></td> 
         <td><select name="Region" class =" bg-danger ">
           <option value ="1" class ="text-white">East</option>
           <option value ="2">West</option>
           
         </select>
         </td>
      </tr>
      <tr>
         <td><h5 class ="bg-white text-dark border-2 ">Name/ชื่อสินค้า:</h5></td> 
         <td><input class="bg-white text-dark"  type = "text" name = "Product" value="Carrot" onfocus="formprofuct()" ></td>
      </tr>
      <p class ="Productform text-danger" ></p>
    
      <tr>
         <td><h5 class ="bg-white text-dark border-2 ">City:</h5></td> 
         <td><input class="bg-white text-dark" type = "text" name = "City" value="Bangkok" ></td>
      </tr>
      <tr>
         <td><h5 class ="bg-white text-dark border-2 ">Category:</h5></td> 
         <td><input class="bg-white text-dark" type = "text" name = "Category" value="Bars" ></td>
      </tr>
      <tr>
         <td><h5 class ="text-primary">Quantity:</h5></td>
         <td><input class ="bg-primary" type = "number" value="999"  name = "Quantity"> </td>
      </tr>
      
      <tr>
         <td><h5 class ="bg-white text-dark border-2 ">UnitPrice:</h5></td>
         <td><input class="bg-white text-dark" type = "number" name = "UnitPrice" value="11.11"></td>
      </tr>
      <tr>
         <td><h5 class ="bg-white text-dark border-2 ">TotalPrice:</h5></td>
         <td><input class="bg-white text-dark" type = "number" name = "TotalPrice" value="1111.11"></td>
      </tr>
      
      <tr>
         <td><h5 class =" text-danger  ">OrderDate:</h5></td>
         <td><input class="bg-danger text-white" type = "date" name = "OrderDate" ></td>
      </tr>
     
      
     
      
      <tr>
         <td>
            <input class ="btn-lg btn-primary" type = "submit" name = "submit" value = "Submit" ></button> 
         </td>
      </tr>
   </table>
                    
                        
  
                     </form>
              </div>
  








</aside>


<script>
 $(".Add").click(function(){
   $(".A").show(1000); 
   $(".D").hide(500); 
   $(".E").hide(500); 
 }); 
  $(".Delete").click(function(){
   $(".A").hide(500); 
   $(".D").show(1000); 
   $(".E").hide(500); 
  });
  $(".Edite").click(function(){
   $(".A").hide(500); 
   $(".E").show(1000); 
   $(".D").hide(500); 
  });
 

$("#shadow").ready(function(){
    $("#tableshow").hide(1000); 
    $(".date").hide(1000);
    $(".datadate").hide(1000);
    $(".form-data").hide(1000);
    $(".A").hide(500); 
   $(".D").hide(500); 
   $(".E").hide(500); 
  });
    $(".buttonall").click(function(){
    $("#tableshow").show(1000);
    $(".datadate").hide(1000);
    $(".form-data").hide(1000);
    $(".date").hide(1000);
     });  
     $(".buttondate").click(function(){
    $("#tableshow").hide(1000);
    $(".date").show(1000);
    $(".datadate").show(1000);
    $(".form-data").hide(1000);
     });  
     
     $(".buttonedite").click(function(){
    $("#tableshow").hide(1000);
    $(".date").hide(1000);
    $(".datadate").hide(1000);
    $(".form-data").show(1000);
     });  



  
 
 </script>
 </body>
</html>