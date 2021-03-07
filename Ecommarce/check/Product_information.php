<?php 
$connection=mysqli_connect("localhost","root","","library_project");
if ($connection->connect_errno>0) 
{
  die("Database not connected".$connection->connect_errno);
}
else
{
  //echo("Database connected Successfully");
}

$message="";
$fetcharray[0]="";
$fetcharray[1]="";
$fetcharray[2]="";
$fetcharray[3]="";
$fetcharray[4]="";
$fetcharray[5]="";
$fetcharray[6]="";
$fetcharray[7]="";
$fetcharray[8]="";
$fetcharray[9]="";
$fetcharray[10]="";


$Id=isset($_POST["id"])?$_POST["id"]:"";
$Itemname=isset($_POST["itmname"])?$_POST["itmname"]:"";
$categoryname=isset($_POST["category"])?$_POST["category"]:"";
$brandname=isset($_POST["brndname"])?$_POST["brndname"]:"";
$product=isset($_POST["Productname"])?$_POST["Productname"]:"";
$measurment=isset($_POST["Measurment"])?$_POST["Measurment"]:"";
$productprice=isset($_POST["productprice"])?$_POST["productprice"]:"";
$saleprice=isset($_POST["saleprice"])?$_POST["saleprice"]:"";
$details=isset($_POST["Details"])?$_POST["Details"]:"";
$stoke=isset($_POST["stoke"])?$_POST["stoke"]:"";
$barcode=isset($_POST["Barcode"])?$_POST["Barcode"]:"";

if(isset($_POST["Addbtn"]))
{
  if(!empty($Id) && !empty($Itemname) && !empty($categoryname) && !empty($brandname) && !empty($product) && !empty($measurment) && !empty($productprice) && !empty($saleprice) && !empty($details) && !empty($stoke) && !empty($barcode))

  {
    $path=("../Product_picture/$Id.jpg");
    move_uploaded_file($_FILES ["IMG"] ["tmp_name"], $path);

    $_insert=$connection->query("INSERT INTO product_info (id,item_name,category_name,brand_name,product_name,measurment_unit,product_price,sale_price,product_details,product_stoke,barcode) VALUES ('$Id','$Itemname','$categoryname','$brandname','$product','$measurment','$productprice','$saleprice','$details','$stoke','$barcode')");

    
    if($_insert)
      {
        $message="<b style='color:green;'>Data Add Successfully</b>";
      }
      else
      {
        $message="<b style='color:red;' >Data Add Unsuccessfully</b>";
      }
    }
    else
    {
      echo "<script>alert('Sorry! Field is empty')</script>";
    }

}

if(isset($_POST["edtbtn"]))
{
  if(!empty($Id) && !empty($Itemname) && !empty($categoryname) && !empty($brandname) && !empty($product) && !empty($measurment) && !empty($productprice) && !empty($saleprice) && !empty($details) && !empty($stoke) && !empty($barcode))

  {

    $_insert=$connection->query("REPLACE INTO product_info (id,item_name,category_name,brand_name,product_name,measurment_unit,product_price,sale_price,product_details,product_stoke,barcode) VALUES ('$Id','$Itemname','$categoryname','$brandname','$product','$measurment','$productprice','$saleprice','$details','$stoke','$barcode')");

    
    if($_insert)
      {
        $message="<b style='color:green;'>Data Edit Successfully</b>";
      }
      else
      {
        $message="<b style='color:red;' >Data Edit Unsuccessfully</b>";
      }
    }
    else
    {
      echo "<script>alert('Sorry! Field is empty')</script>";
    }

}

if(isset($_GET["editbtn"]))
{
  $selectional=$connection->query("SELECT*FROM product_info WHERE id='".$_GET["editbtn"]."'");
  $fetcharray=$selectional->fetch_array();
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
    <title>Product Information</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
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



    <script src='../tinymce/tinymce.min.js'></script>
    <script type="text/javascript">
      tinymce.init({
      selector: '#myTextarea'
  });
    </script>


  </head>
  <body>
    <form name="" method="POST" enctype="mutipart/form_data">

    <table class="table table-hover" style="max-width: 100%; border: 1px solid #f4f4f4;" align="center">
  <thead>
    <tr>
      <th colspan="3" style="background-color:#f4f4f4;"><h4>Product Information</h4></th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <td style="text-align: right;"><b>Product ID</b></td>
      <td>:</td>
      <td><input type="text" name="id" value="<?php echo $fetcharray[0]; ?>" class="form-control" style="border: 1px solid yellow;"></td>
    </tr>


    <tr>
      <td style="text-align: right;"><b>Item Name</b></td>
      <td>:</td>
      <td>
        <select class="form-control" name="itmname" id="ItemName"> value="<?php echo $fetcharray[1]; ?>" style="border: 1px solid yellow;">

            <option>Select One</option>

          <?php
          $select=$connection->query("SELECT * FROM item_info");
          while ($array=$select->fetch_array()) 
          {

          ?>

          
          <option><?php echo $array["1"]; ?></option>
          <?php
        }
          ?>
        </select>
      </td>
    </tr>

    <tr>
      <td style="text-align: right;"><b>Category Name</b></td>
      <td>:</td>
      <td>
        <select name="category" id="CatName" class="form-control">
        
        
                  <!-- <option>......Select One........</option> -->
          </select>       
         &nbsp;&nbsp;<?php print $filloutcat?> <span id="category_result"></span>      </td>
    </tr>

        <tr>
      <td style="text-align: right;"><b>Brand Name</b></td>
      <td>:</td>
      <td>
        <select class="form-control" name="brndname" value="<?php echo $fetcharray[3]; ?>" style="border: 1px solid yellow;">
          <option>Select One</option>
          <option>Samsung</option>
          <option>Dell</option>
          <option>Hp</option>
          <option>Asus</option>
        </select>
      </td>
    </tr>

  
     <tr>
      <td style="text-align: right;" ><b>Product Name</b></td>
      <td>:</td>
      <td><input type="text" name="Productname" value="<?php echo $fetcharray[4]; ?>" class="form-control" style="border: 1px solid yellow;"></td>
    </tr>

         <tr>
      <td style="text-align: right;"><b>Measurment Unit</b></td>
      <td>:</td>
      <td>
        <select class="form-control" name="Measurment" value="<?php echo $fetcharray[5]; ?>" style="border: 1px solid yellow;">
          <option>Select One</option>
          <option>#</option>
          <option>#</option>
          <option>#</option>
          <option>#</option>
        </select>
      </td>
    </tr>

    <tr>
      <td style="text-align: right;"><b>Product Price</b></td>
      <td>:</td>
      <td><input type="text" name="productprice" value="<?php echo $fetcharray[6]; ?>" class="form-control" style="border: 1px solid yellow;"></td>
    </tr>
    <tr>
      <td style="text-align: right;"><b>Sale Price</b></td>
      <td>:</td>
      <td><input type="text" name="saleprice" value="<?php echo $fetcharray[7]; ?>" class="form-control" style="border: 1px solid yellow;"></td>
    </tr>

    <tr>
      <td style="text-align: right;"><b>Product Details</b></td>
      <td>:</td>
      <td><textarea class="form-control" id="myTextarea" value="<?php echo $fetcharray[8]; ?>" name="Details" style="border: 1px solid yellow;"></textarea></td>
    </tr>

     <tr>
      <td style="text-align: right;"><b>Product Stock</b></td>
      <td>:</td>
      <td><input type="text" name="stoke" value="<?php echo $fetcharray[9]; ?>" class="form-control" style="border: 1px solid yellow;"></td>
    </tr>

     <tr>
      <td style="text-align: right;"><b>Product Picture</b></td>
      <td>:</td>
      <td><input type="file" name="IMG" ></td>
    </tr>
    <tr>
      <td style="text-align: right;"><b>Barcode</b></td>
      <td>:</td>
      <td><input type="text" name="Barcode" value="<?php echo $fetcharray[10]; ?>" class="form-control" style="border: 1px solid yellow;"></td>
    </tr>
    <tr>
      <td colspan="3" align="center" >
        <?php echo $message; ?>
      </td>
    </tr>

    <tr>
      <td colspan="3" align="center">
        <button type="submit" name="Addbtn" value="" class="btn btn-success" style="height: 40px; width: 80px;">Add</button>
        <button type="submit" name="edtbtn" value="submit" class="btn btn-primary" style="height: 40px; width: 80px;">Edit</button>
        <button type="button" name="" value="submit" class="btn btn-danger" style="height: 40px; width: 80px;">Delete</button>
        <a href="Product_view.php" target="_blank"  type="submit" name="" value="submit" class="btn btn-info" style="height: 40px; width: 80px;">View</a>
        <button type="submit" name="cancel" value="submit" class="btn btn-secondary" style="height: 40px; width: 80px;">Cancel</button>
      </td>
    </tr>
  </tbody>
  </form>
</table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html> 