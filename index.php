<!DOCTYPE html> 
<html>
        <title>e-commerceproject2</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav>
            <div class="logo">
               <p> <img src="image/Hypertext designers.png" width="50" height="50"> <b>Hypertext Designers</b></p>            </div>

 <?php
 if(isset($_session['email'])){
    ?>
    <ul>
<a href="cart.php" class="btn btn-info"><i style='font-size:24px' class="material-icons">&#xe0ba;</i> Cart</a>
<a href="https://jyotishreepradhan6.wixsite.com/website" class="btn btn-danger" ><i style='font-size:24px' class='fas'>&#xf1d8;</i> follow us</a>
<a href="contact.php" class="btn btn-info"  data-toggle="collapse"><i style='font-size:24px' class="material-icons">&#xe0ba;</i> Contact</a>
<a href="logout.php" class="btn btn-light" ><i style='font-size:24px' class='fas'>&#xf21b;</i> Logout</a>
 </ul>
 <?php
}else{
    ?>
    <ul>
  <a href="product.php" class="btn btn-secondary" ><i style='font-size:24px'class="fa fa-home" aria-hidden="true"></i>Home</a>
  <a href="signup.php" class="btn btn-primary" ><i style='font-size:24px' class='fas'>&#xf234;</i> Signup</a>
  <a href="login.php" class="btn btn-success" ><i style='font-size:24px' class='fas'>&#xf508;</i> Login</a>
</ul>
 <?php
 }
 ?>
                           
 </ul>
     </div>
               </div>
               </nav>
                   
    </body>
</html>