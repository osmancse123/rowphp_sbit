<?php
include("connection/connect.php");

 $message="";

$fetcharry[0]="";
$fetcharry[1]="";

$Id=isset($_POST["id"])?$_POST["id"]:"";
$ItemName=isset($_POST["name"])?$_POST["name"]:"";

 if(isset($_POST["addBtn"]))
  {
    if(!empty($Id) && !empty($ItemName))
    {
      $path="item_img/$Id.jpg";
      move_uploaded_file($_FILES["IMG"]["tmp_name"], $path);

      $insert=$conn->query("INSERT INTO `item_info` (`ID`,`Item_Name`) VALUES('$Id','$ItemName')");
      if($insert)
      {
        $message="<b style='color:green'>Data Save Successfull</b>";
      }
      else
      {
        $message="<b style='color:red'>Data Save Unsuccessfull</b>";
      }
    }
    else
    {
      echo "Sorry Field is Empty";
    }
  }

  if(isset($_POST["editBtn"]))
  {
    if(!empty($Id) && !empty($ItemName))
    {
      $insert=$conn->query("replace INTO `item_info` (`ID`,`Item_Name`) VALUES('$Id','$ItemName')");
      if($insert)
      {
        $message="<b style='color:green'>Data Edit Successfull</b>";
      }
      else
      {
        $message="<b style='color:red'>Data Edit Unsuccessfull</b>";
      }
    }
    else
    {
      echo "<script>alert('Sorry Field is Empty')</script>";
    }
  }

if(isset($_GET["edtId"]))
{
  $select=$conn->query("SELECT * FROM item_info WHERE id='".$_GET["edtId"]."'");
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
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
    <form name="" method="post" enctype="multipart/form-data">

    <table class="table table-bordered" style="max-width: 80%;" align="center">
  <thead>
    <tr>
      <th colspan="2"><h2>Item Information</h2></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Item ID</td>
      <td><input type="text" name="id" value="<?php echo $fetcharry[0];?>" class="form-control"></td>
    </tr>

     <tr>
      <td>Item Name</td>
      <td><input type="text" name="name" value="<?php echo $fetcharry[1];?>" class="form-control"></td>
    </tr>

     <tr>
      <td>Item Picture</td>
      <td><input type="file" name="IMG" ></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $message;?></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <button type="submit" name="addBtn" class="btn btn-success">Add</button>
        <button type="submit" name="editBtn" class="btn btn-primary">Edit</button>
        <button type="submit" name="" class="btn btn-danger" disabled="">Delete</button>
        <a href="itemView.php" target="_blank" type="submit" name="VIEW" class="btn btn-info">View</a>
        <button type="submit" name="cancel" class="btn btn-secondary">Cancel</button>
      </td>
    </tr>
  </tbody>
</table>


</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>