<?php
include("connection/connect.php");


  if(isset($_GET["dltId"]))
  {
    $insert=$conn->query("DELETE FROM `category_info` WHERE `category_id`='".$_GET["dltId"]."'");
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
    <title>category View</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
    <form method="post" name="">
      <table class="table table-bordered">
        <tr>
          <td class="btn-primary text-white">Item name</td>
          <td class="btn-primary text-white">Item id</td>
          <td class="btn-primary text-white">Category name</td>
          <td class="btn-primary text-white">edit</td>
          <td class="btn-primary text-white">delete</td>
        </tr>

          <?php
           $select=$conn->query("SELECT * FROM `category_info`");
            while($fetcharry=$select->fetch_array())
        {
        ?>
        <tr>
          <td><?php echo $fetcharry[0]?></td>
          <td><?php echo $fetcharry[1]?></td>
          <td><?php echo $fetcharry[2]?></td>
          <td><a href="Category_Information.php?edtId=<?php echo $fetcharry[1] ?>"  class="btn btn-primary">Edit</a></td>
          <td><a href="CategoryView.php?dltId=<?php echo $fetcharry[1] ?>" type="submit" class="btn btn-danger">Delete</a></td>
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