<?php
include("connection/connect.php");


  $message="";

  $fetcharry[0]="";
  $fetcharry[1]="";
  $fetcharry[2]="";
  $fetcharry[3]="";
  $fetcharry[4]="";
  $fetcharry[5]="";
  $fetcharry[6]="";
  $fetcharry[7]="";
  

  $ItemName=isset($_POST["ItemName"])?$_POST["ItemName"]:"";
  $CatName=isset($_POST["CatName"])?$_POST["CatName"]:"";
  $ProductID=isset($_POST["pdId"])?$_POST["pdId"]:"";
  $ProductName=isset($_POST["pdName"])?$_POST["pdName"]:'';
  $ProductPrice=isset($_POST["pdPrice"])?$_POST["pdPrice"]:"";
  $ProductDetails=isset($_POST["pdDetails"])?$_POST["pdDetails"]:"";
  $ProductStock=isset($_POST["pdStoke"])?$_POST["pdStoke"]:"";
  $productPicture=isset($_POST["IMG"])?$_POST["IMG"]:"";



  if(isset($_POST["addBtm"]))
  {
    if(!empty($ItemName) && !empty($CatName) && !empty($ProductID) && !empty($ProductName) && !empty($ProductPrice) && !empty($ProductDetails) && !empty($ProductStock))
    { 
       $path="product_img/$ProductID.jpg";
      move_uploaded_file($_FILES["IMG"]["tmp_name"], $path);

      $insert=$conn->query("INSERT INTO `product_info` (`ItemName`,`CatName`,`ProductID`,`ProductName`,`ProductPrice`,`ProductDetails`,`ProductStock`) VALUES ('$ItemName','$CatName','$ProductID','$ProductName','$ProductPrice','$ProductDetails','$ProductStock')");
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
      echo "Sorry Text Field is empty";
    }
  }


  if(isset($_POST["edtBtn"]))
  {
    if(!empty($ItemName) && !empty($CatName) && !empty($ProductID) && !empty($ProductName) && !empty($ProductPrice) && !empty($ProductDetails) && !empty($ProductStock))
    {
      $insert=$conn->query("REPLACE INTO `product_info` (`ItemName`,`CatName`,`ProductID`,`ProductName`,`ProductPrice`,`ProductDetails`,`ProductStock`) VALUES ('$ItemName','$CatName','$ProductID','$ProductName','$ProductPrice','$ProductDetails','$ProductStock')");
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
      echo "Sorry Text Field is empty";
    }
  }

  if(isset($_GET["edtId"]))
{
  $select=$conn->query("SELECT * FROM `product_info` WHERE `ProductID`='".$_GET["edtId"]."'");
   $fetcharry=$select->fetch_array();
}




  if(isset($_POST["Cancel"]))
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
    <title>Add Product</title>
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
    <form name="" method="post" enctype="multipart/form-data">
    <table class="table table-bordered" style="max-width: 100%;" align="center">
  <thead>
    <tr>
      <th colspan="2"><h2>Product Information</h2></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Item Name</td>
      <td>
        <select class="form-control" name="ItemName">
          <option><?php echo $fetcharry[0] ?></option>

          <?php
             $select=$conn->query("SELECT * FROM `item_info`");
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
      <td>Category Name</td>
      <td>
        <select class="form-control" name="CatName">
          <option><?php echo $fetcharry[1] ?></option>

          <?php
             $select=$conn->query("SELECT * FROM `category_info`");
            while($fetchary=$select->fetch_array())
            {
          ?>
          <option><?php echo $fetchary[2];?></option>

        <?php 
          } 
        ?>

        </select>
      </td>
    </tr>

     <tr>
      <td>Product ID</td>
      <td><input type="text" name="pdId" value="<?php echo $fetcharry[2] ?>" class="form-control"></td>
    </tr>

     <tr>
      <td>Product Name</td>
      <td><input type="text" name="pdName" value="<?php echo $fetcharry[3] ?>" class="form-control"></td>
    </tr>

    <tr>
      <td>Product Price</td>
      <td><input type="text" name="pdPrice" value="<?php echo $fetcharry[4] ?>" class="form-control"></td>
    </tr>

    <tr>
      <td>Product Details</td>
      <td><textarea name="pdDetails" id="myTextarea" value="<?php echo $fetcharry[5] ?>" class="form-control"></textarea></td>
    </tr>

     <tr>
      <td>Product Stock</td>
      <td><input type="text" name="pdStoke" value="<?php echo $fetcharry[6] ?>" class="form-control"></td>
    </tr>

     <tr>
      <td>Product Picture</td>
      <td>
      <input type="file" name="IMG">
      <img src="" id="profile-img-tag" width="80" height="80" />
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center"><?php echo "$message" ?></td>
    </tr>

    <tr>
      <td colspan="2" align="center">
        <button type="submit" name="addBtm" class="btn btn-success">Add</button>
        <button type="submit" name="edtBtn" class="btn btn-primary">Edit</button>
        <button type="submit" name="" class="btn btn-danger">Delete</button>
        <a href="product_view.php" target="osman" type="submit" name="viewBtn" class="btn btn-info">View</a>
        <button type="submit" name="Cancel" class="btn btn-secondary">Cancel</button>
      </td>
    </tr>
  </tbody>

</table>
</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>