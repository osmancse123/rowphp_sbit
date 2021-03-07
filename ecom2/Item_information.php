<?php 
include("connection/connect.php");
  
  $message="";
  $fetcharry[0]="";
  $fetcharry[1]="";
  $IMG="";

  $id=isset($_POST["id"])?$_POST["id"]:"";
  $itemname=isset($_POST["name"])?$_POST["name"]:"";

  if(isset($_POST["addBtn"]))
  {
    if(!empty($id) && !empty($itemname))
    {
     
      $path="item_img/$id.jpg";
      move_uploaded_file($_FILES["IMG"]["tmp_name"], $path);
      
      

      $insert=$conn->query("INSERT INTO `item_info` (`Item_ID`,`Item_Name`) VALUES ('$id','$itemname')");

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
      echo "Sorry Field is empty";
    }
  }

  if(isset($_POST["edtBtn"]))
  {
    if(!empty("$id") && !empty("itemname"))
    {
      $insert=$conn->query("REPLACE INTO `item_info` (`Item_ID`,`Item_Name`) VALUES ('$id','$itemname')");
      if($insert)
      {
        $message="<b style='color:green'>Data Save Successfull<b/>";
      }
      else
      {
        $message="<b style='color:red'>Data Save Ussuccessfull<b/>";
      }
    }
    else
    {
      echo "<script>alert('Sorry Field is Empty');</script";
    }
  }


  if(isset($_GET["edtId"]))
    {
        $select=$conn->query("SELECT * FROM `item_info` WHERE `Item_ID`='".$_GET["edtId"]."'");
        $fetcharry=$select->fetch_array();
    }
       

  if(isset($_POST["cencel"]))
  {
    echo exit();
  }
       

?>

<!DOCTYPE html>
<html lang="en"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Item Information</title>
  </head>
  <body>
    <form name="" method="post"  enctype="multipart/form-data">
    <table class="table table-bordered" style="max-width: 80%" align="center">

      <thead>
        <tr>
          <th colspan="2"><h2>Item Information</h2></th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Item ID</td>
          <td><input type="text" name="id" value="<?php echo $fetcharry[0]?>" class="form-control"></td>
        </tr>

        <tr>
          <td>Item Name</td>
          <td><input type="" name="name" value="<?php echo $fetcharry[1]?>" class="form-control"></td>
        </tr>

        <tr>
          <td>Item Picture</td>
          <td>
            <input type="file" name="IMG" >
            <img src="" id="profile-img-tag" width="80" height="80" />
          </td>
        </tr>

        <tr>
          <td colspan="2" align="center"><?php echo $message;?></td>
        </tr>

      </tbody>


      <tfoot>
        <tr>
          <td colspan="2" align="center">
            <button type="submit" name="addBtn" class="btn btn-success">Add</button>
            <button type="submit" name="edtBtn" class="btn btn-primary">Edit</button>
            <button type="submit" name="" class="btn btn-danger" disabled="">Delete</button>
            <a href="itemView.php" target="osman" type="submit" name="ViewBtn" class="btn btn-info">View</a>
            <button type="submit" name="cencel" class="btn btn-secondary">Cencel</button>
          </td>
        </tr>
      </tfoot>
      
    </table>
      <!-- <?php
          if(isset($_POST["ViewBtn"]))
          {
      ?>
      <table>
            .
            .
      </table> 
      <?php
         }
      ?> -->

    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>