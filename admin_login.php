<?php
session_start();
$con = mysqli_connect("localhost","root","");
if($con){
echo "connection successful";
}else{
    echo "no connection";
}

?>

<html>
   <head>
       <title></title>
       <link rel="stylesheet" type="text/css" href="style3.css">
       <?php include'link.php'?>
   </head>
<body>
    <header>
    <div class="container center-div  shadow ">
        <div class="heading text-center mb-4 text-uppercase text-white">ADMIN LOGIN HERE</div>
           <div class="container row d-flex flext-row justify-content-center mb-4">
              <div class="admin-form shadow p-2">
                   <form action="login_check.php" method="POST">
                    <div class="form-group">
                      <lebel>Email ID</lebel>
                      <input type="text" name="user" value=""  class="form-control"  autocomplete="off">
                    </div>
                      <div class="form-group">
                      <lebel>Password</lebel>
                      <input type="text" name="pass" value=""  class="form-control" autocomplete="off">
                     
                    </div>
                      <input type="submit" class="btn btn-success" name="submit" >
                   </form>
              </div>

            </div>

        
        
    </div>


    </header>
</body>


</html>
