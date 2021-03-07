<?php
include("connection/connect.php");


if(isset($_GET["dltId"]))
{
  $insert=$conn->query("DELETE FROM item_info WHERE id='".$_GET["dltId"]."'");
   if($insert)
      {
        $message="<b style='color:green'>Data Delete Successfull</b>";
      }
      else
      {
        $message="<b style='color:red'>Data Delete Unsuccessfull</b>";
      }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Item View</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
    <form name="" method="post">
    <table class="table table-bordered">
    <tr>
      <td>Item ID</td>
      <td>Item Name</td>
      <td>Picture</td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>
    <?php
       $select=$conn->query("SELECT * FROM item_info");
        while($fetcharry=$select->fetch_array())
        {
        ?>
    <tr>
      <td><?php echo $fetcharry[0]?></td>
      <td><?php echo $fetcharry[1]?></td>
      <td><img src="item_img/<?php echo $fetcharry[0]?>.jpg" height="100" width="100"></td>
      <td><a href="Item_information.php?edtId=<?php echo $fetcharry[0]?>" class="btn btn-primary">Edit</a></td>
      <td><a href="itemView.php?dltId=<?php echo $fetcharry[0]?>" type="submit" class="btn btn-danger">Delete</a></td>
    </tr>
      <?php
        }
    ?>

  </table>
</form>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>