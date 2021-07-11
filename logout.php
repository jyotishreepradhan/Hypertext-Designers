<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Hypertext Designers</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        
       
    </head>

    <body>
    <div style="background:url(./image/p1.jpg);background-size:cover";>
        <div>
        
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <center>
                            <div class="panel-body">

                            <br><br><br><br><br><br><br><br><br>
                               <h3> <p>You have been logged out.<br><br> <button>
  <a href="index.php" class="btn btn-info" ><i style='font-size:24px' class='fas'>&#xf508;</i> Login again</a>
</button></p></h3>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
                <center>
                  <h2> <p><b>...This website is developed by Hypertext Designers...</b></p></h2>
               </center>
               <br><br><br><br><br><br><br><br>
               </div>
           </footer>
        </div>
    </body>
</html>
