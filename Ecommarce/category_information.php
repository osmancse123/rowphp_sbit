<?php
include("connection/connect.php");
  
  $massage="";

  $fetcharry[0]="";
  $fetcharry[1]="";
  $fetcharry[2]="";




  $ItemName=isset($_POST["ItemName"])?$_POST["ItemName"]:"";
  $Id=isset($_POST["id"])?$_POST["id"]:"";
  $categoryName=isset($_POST["name"])?$_POST["name"]:"";

  if(isset($_POST["addBtn"]))
  {
    if(!empty($ItemName) && !empty($Id) && !empty($categoryName))
    {
      $insert=$conn->query("INSERT INTO `category_info` (`item_name` ,`id` ,`category_name`) values('$ItemName','$Id','$categoryName')");
      if($insert)
      {
        $massage="<b style='color:green'>Data Save Successfully</b>";
      }
      else
      {
        $massage="<b style='color:red'>Data Save Unsuccessfully</b>";
      }

    }
    else
    {
      echo "sorry the field is empty";
    }

  }

  if(isset($_POST["editBtn"]))
  {
    if(!empty($ItemName) && !empty($Id) && !empty($categoryName))
    {
      $insert=$conn->query("REPLACE INTO category_info(item_name,id,category_name) VALUES('$ItemName','$Id','$categoryName')");
      if($insert)
      {
        $massage="<b style='color:green'>Data Save Successfully</b>";
      }
      else
      {
        $massage="<b style='color:red'>Data Save Unsuccessfully</b>";
      }

    }
    else
    {
      echo "sorry the field is empty";
    }

  }

  if(isset($_GET["edtId"]))
{
  $select=$conn->query("SELECT * FROM category_info WHERE id='".$_GET["edtId"]."'");
   $fetcharry=$select->fetch_array();
}


  if(isset($_POST["cancel"]))
  {
    echo exit();
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
    <form method="post" name="">

    <table class="table table-bordered" style="max-width: 80%;" align="center">
  <thead>
    <tr>
      <th colspan="2"><h2>Category Information</h2></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Item Name</td>
      <td>
        <select class="form-control" name="ItemName">
          <option><?php echo $fetcharry[0];?></option>

          <?php
             $select=$conn->query("SELECT * FROM item_info");
            while($fetchary=$select->fetch_array())
            {
          ?>
          <option><?php echo $fetchary[1];?></option>

        <?php 
          } 
        ?>

        </select>
      </td>
    </tr>

     <tr>
      <td>Category ID</td>
      <td><input type="text" name="id" value="<?php echo $fetcharry[1];?>" class="form-control"></td>
    </tr>

     <tr>
      <td>Category Name</td>
      <td><input type="text" name="name" value="<?php echo $fetcharry[2];?>" class="form-control"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <?php echo $massage; ?>
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center">
        <button type="submit" name="addBtn" class="btn btn-success">Add</button>
        <button type="submit" name="editBtn" class="btn btn-primary">Edit</button>
        <button type="submit" class="btn btn-danger">Delete</button>
        <button type="submit" name="viewBtn" class="btn btn-info">View</button>
        <!-- <a href="categoryVeiw.php" target="_blank" type="submit" class="btn btn-info">View</a> -->
        <button type="submit" name="cancel" class="btn btn-secondary">Cancel</button>
      </td>
    </tr>
  </tbody>
</table>

<?php
if(isset($_POST["viewBtn"]))
{
?>
  <table class="table table-bordered">
    <tr>
      <td>Item Name</td>
      <td>Cat ID</td>
      <td>Cat Name</td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>

    <?php
     $select=$conn->query("SELECT * FROM category_info");
        while($fetcharry=$select->fetch_array())
        {
    ?>
    <tr>
      <td><?php echo $fetcharry[0]?></td>
      <td><?php echo $fetcharry[1]?></td>
      <td><?php echo $fetcharry[2]?></td>
      <td><a href="category_information.php?edtId=<?php echo $fetcharry[1] ?>"  class="btn btn-success">Edit</a></td>
      <td><a href="categoryVeiw.php?dltId=<?php echo $fetcharry[1] ?>" type="submit" class="btn btn-danger">Delete</a></td>
    </tr>

    <?php
      }
    ?>


  </table>

<?php
}
?>

</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>