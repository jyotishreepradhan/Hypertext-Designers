<?php
    session_start();
    require 'check_if_added.php';
    include('dbconfig.php');
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
        <link rel="stylesheet" href="style4.css">
       
    </head>
    <body>
        <div style="background:url(./image/p1.jpg);background-size:cover";>
            <?php
                require 'index2.php';
            ?>
            <center>
            <div class="container">
                <div class="jumbotron" >
                    <h1>Welcome to our TheBluessy!</h1>
                    <p>We have the best clothes for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            </center>
            <table>
            
            <div class="container">
                <div class="row">
                    <?php
                        $query = "SELECT * FROM items";
                        $queryresult = mysqli_query($con, $query);
                        while($row=mysqli_fetch_array($queryresult)){
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="<?php echo $row['image']; ?>" style="width:255px;height:350px">
                            </a>
                            <center>
                                <div class="caption">
                                 <h4><b><?php echo $row['name']; ?></b></h4>
                                <h5><b>Price: Rs. <?php echo $row['price']; ?>/-</b></h5><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart($row['id'])){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=<?php echo $row['id']; ?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <br><br>
                                    </table>
           <footer class="footer">
               <div class="container">
                <center> 
                   <p><b>This website is developed by Hypertext Designers</b></p>
               </center>
               </div>
           </footer>
           <br>
        </div>
    </body>
</html>
