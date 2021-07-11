<?php
include "dbconfig.php";

$id=$_GET['id'];

$sql="delete from items where id=$id";
if($con->query($sql)){
  header("location:view_product.php");

}
else{
  echo "failed";
}

?>