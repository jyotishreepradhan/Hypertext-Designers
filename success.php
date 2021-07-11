<?php
    session_start();
    require 'dbconfig.php';
    if(!isset($_SESSION['email'])){
        
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>
        <div style="background:url(./image/p2.jpg);background-size:cover";>
            
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                            <br><br><br><br><br><br><br><br><br>
                           <center><h1>  <p>Your order is confirmed.<br> Thank you for shopping with us.<br>
                                     <a href="product.php" class="btn btn-danger"><i style='font-size:24px' class='fas'>&#xf1d8;</i>Click here</a><br> To purchase any other item.</p></h1></center> </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
                <center> 
                  <h2> <p><b>This website is developed by Hypertext Designers</b></p></h2>
               </center>
               <br><br><br><br><br><br><br><br>
               </div>
           </footer>
        </div>
    </body>
</html>
