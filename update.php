<?php
include "dbconfig.php";
include "admin_home.php";
$id=$_GET['id'];
if(isset($_POST['update'])){
  $name=$_POST['name'];
  $image=$_POST['image'];
  $price=$_POST['price'];
  $color=$_POST['color'];
  $sql="update items set name='$name',image='$image',price='$price',color='$color' where id=$id";
  if($con->query($sql)){
    header("location:view_product.php");
  }
  else{
    header("location:update.php");
  }
}

$qry="select * from items where id=$id";
$result=$con->query($qry);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  $name=$data['name'];
  $image=$data['image'];
  $price=$data['price'];
  $color=$data['color'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>update form</h1>
  <form action="" method="post">
  <input type="text" name="name" value="<?php echo $name;?>" placeholder="enter name">
  <input type="text" name="image" value="<?php echo $image;?>" placeholder="enter image">
  <input type="text" name="color" value="<?php echo $color;?>" placeholder="enter color">
  <input type="text" name="price" value="<?php echo $price;?>" placeholder="enter price">
  <input type="submit" value="update" name="update">
  </form>
</body>
</html>