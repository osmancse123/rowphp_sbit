<?php
include("connection/connect.php");
  $message="";
  $filloutcat="";

  $ItemName=isset($_POST["name"])?$_POST["name"]:"";
  $categoryName=isset($_POST["name"])?$_POST["name"]:"";
  $ProId=isset($_POST["id"])?$_POST["id"]:"";
  $ProName=isset($_POST["name"])?$_POST["name"]:"";
  $ProPrice=isset($_POST["Price"])?$_POST["Price"]:"";
  $ProDetails=isset($_POST["details"])?$_POST["details"]:"";
  $ProStock=isset($_POST["stock"])?$_POST["stock"]:"";

  If(isset($_POST["addBtn"]))
  {
    if(!empty($ItemName) && !empty($categoryName) && !empty($ProId) && !empty($ProName) && !empty($ProPrice) && !empty($ProDetails) && !empty($ProStock))
    {
      $insert=$conn->query("INSERT INTO `product_info` (`Item_name`,`Category_name`,`Product_id`,`Product_name`,`Product_price`,`product_details`,`Product_stock`,) VALUES('$ItemName','$categoryName','$ProId','$ProName','$ProPrice','$ProDetails','$ProStock')");
      if ($insert) 
      {
        $message="<b style='color:green'>Data save successfull<b>";
      }
      else
      {
        $message="<b style='color:red'>Data save unsuccessfull<b>";
      }

    }
    else
    {
      echo "sorry field is empty";
    }
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

      <script type="text/javascript" src="js/jquery.js"></script>


<script type="text/javascript">
  $(document).ready(function()
  {
    var checking_html = '<img src="loading.gif" /> Checking...';
    $('#ItemName').change(function() //id of item name
    {
      //alert("ok");
      $('#item_result').html(checking_html);
        check_availability();
    }); 
  });
//function to check username availability 
function check_availability()
{
    var item_name = $('#ItemName').val();
    //alert(item_name);
    $.post("check_category_name.php", { item: item_name },  // item is a varriable and item_name of top line
      function(result){
        //if the result is 1
        if(result !=null )
        {
          //show that the username is available
          $('#CatName').html(result);
          $('#item_result').html("");
          $('#category_result').html('');
        }
        else
        {
          //show that the username is NOT available
          $('#category_result').html('No Category Name Found');
          $('#item_result').html("");
          $('#select').html('');
        }
    });

}  

</script>

<link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="lib/jquery-1.9.0.min.js"></script>

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
      <th colspan="2"><h2>Product Information</h2></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Item Name</td>
      <td>
        <select class="form-control" name="" id="ItemName">
          <option>Select One</option>
          
          <?php
          $select=$conn->query ("SELECT * FROM item_info");
          while ($fetcharry=$select->fetch_array())
            {
          ?>

          <option><?php echo $fetcharry[1]; ?></option>

          <?php
            }
          ?>

        </select>
      </td>
    </tr>

    <tr>
      <td>Category Name</td>
      <td>
        <select class="form-control" name="" id="CatName">
          <option>Select One</option>

        </select>
         &nbsp;&nbsp;<?php print $filloutcat?> <span id="category_result"></span>
      </td>
    </tr>

     <tr>
      <td>Product ID</td>
      <td><input type="text" name="id" value="" class="form-control"></td>
    </tr>

     <tr>
      <td>Product Name</td>
      <td><input type="text" name="name" value="" class="form-control"></td>
    </tr>

    <tr>
      <td>Product Price</td>
      <td><input type="text" name="Price" value="" class="form-control"></td>
    </tr>

    <tr>
      <td>Product Details</td>
      <td><textarea class="form-control" name="details" id="myTextarea"></textarea></td>
    </tr>

     <tr>
      <td>Product Stock</td>
      <td><input type="text" name="stock" value="" class="form-control"></td>
    </tr>

     <tr>
      <td>Product Picture</td>
      <td><input type="file" name="" value="" class="form-control"></td>
    </tr>

    <tr>
      <td colspan="2" align="center">
        <button type="submit" name="addBtn" class="btn btn-success">Add</button>
        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="submit" class="btn btn-danger">Delete</button>
        <button type="submit" class="btn btn-info">View</button>
        <button type="submit" class="btn btn-secondary">Cancel</button>
      </td>
    </tr>
  </tbody>
</form>
</table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>