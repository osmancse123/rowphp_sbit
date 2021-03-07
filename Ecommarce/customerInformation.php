<?php
include("connection/connect.php");

$message="";

$CusId=isset($_POST["id"])?$_POST["id"]:"";
$CusName=isset($_POST["name"])?$_POST["name"]:"";
$CusDetails=isset($_POST["details"])?$_POST["details"]:"";
$CusCon=isset($_POST["contect"])?$_POST["contect"]:"";

if(isset($_POST["addBtn"]))
  {
    if(!empty($CusId) && !empty($CusName) && !empty($CusDetails) && !empty($CusCon))
    {

      $insert=$conn->query("INSERT INTO `customer_info` (`customer_id`,`customer_name`,`customer_details`,`customer_con`) VALUES('$CusId','$CusName','$CusDetails','$CusCon')");
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
    <title>Customer Info</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script src='tinymce/tinymce.min.js'></script>
    <script type="text/javascript">
      tinymce.init({
      selector: '#myTextarea'
  });
    </script>


  </head>
  <body>
    <form name="" method="POST">

    <table class="table table-bordered" style="max-width: 100%;" align="center">
  <thead>
    <tr>
      <th colspan="2"><h2>Customer Information</h2></th>
    </tr>
  </thead>
  <tbody>


     <tr>
      <td>Customer ID</td>
      <td><input type="text" name="id" value="" class="form-control"></td>
    </tr>

     <tr>
      <td>Customer Name</td>
      <td><input type="text" name="name" value="" class="form-control"></td>
    </tr>



    <tr>
      <td>Customer Details</td>
      <td><textarea class="form-control" name="details" id="myTextarea"></textarea></td>
    </tr>

     <tr>
      <td>Customer Contact</td>
      <td><input type="text" name="contect" value="" class="form-control"></td>
    </tr>

     <tr>
      <td>Customer Picture</td>
      <td><input type="file" name="" value="" class="form-control"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <?php echo $message;?>
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center">
        <button type="submit" name="addBtn" class="btn btn-success">Add</button>
        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="customerView.php" target="_blank" type="submit"  class="btn btn-info">View</a>
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