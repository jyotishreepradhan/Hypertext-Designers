<?php
include "admin_home.php";
include "dbconfig.php";

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $image=$_POST['image'];
  $price=$_POST['price'];
  $color=$_POST['color'];
  
  $sql="insert into items values(0,'$name','$image','$price','$color')";
  if($con->query($sql)){
    ?>
    <script>
    alert("data inserted successfully");
    </script>
  <?php
  }
  else{
   ?>
    <script>
    alert("something wrong");
    </script>
   <?php
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style1.css">
  <title>add product</title>
</head>
<body>
  <br><br><br><br><br>
  <form action="" method="post">
  <h2>ADD PRODUCT HERE</h2>
  <input type="text" name="name" id="" placeholder="product name">
  <input type="text" name="image" id="" placeholder="image">
  <input type="text" name="price" id="" placeholder="price">
  <input type="text" name="color" id="" placeholder="color">
 

  <input type="submit" value="Add product" name="submit">

  </form>
  
            
            <footer class="footer">
               <div class="container">
                <center>
                  <h3> <p><b>...This website is developed by Hypertext Designers...</b></p></h3>
               </center>
               <br><br><br><br>
               </div>
           </footer>
  </body>
  </html>