<?php
include "dbconfig.php";
include "admin_home.php";
session_start();
if(isset($_SESSION['id'])){

echo "welcome $_SESSION[id]";
$sql="select * from items";
$result=$con->query($sql);
if($result->num_rows>0){

  echo "<table border=1 style='width:600px;margin:auto'>";
   echo "<tr><th><?php echo $row['product_id']; ?></th>
        <th><?php echo $row['product_name']; ?></th>
        <th><?php echo $row['color']; ?></th>
        <th><?php echo $row['>price']; ?></th>
        </tr>"

  while($data=$result->fetch_assoc()){

    echo "<tr>
              <td>$data[product_id]</td>
              <td>$data[product_name]</td>
              <td>$data[color]</td>
              <td>$data[price]</td>
              <td><a href='update.php?id=$data[id]'>update</a>
              <a href='delete.php?id=$data[id]'>delete</a>
              </td>
    </tr>"
  }
}
else{
  echo "no data found";
}
}

?>
</table>