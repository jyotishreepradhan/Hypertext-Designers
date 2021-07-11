<?php
include "dbconfig.php";
$username=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$con=new mysqli("localhost","root","","shop");
if($con->connect_error){
    die("something wrong..try again");
}
$qry="insert into users values(0,'$username','$email','$address','$mobile','$password')";
if($con->query($qry)){
    echo"data inserted successfully";
}
else{
    echo"try again";
}
?>