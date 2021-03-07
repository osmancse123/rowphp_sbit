<?php
include("connection/connect.php");
    

  $message="";

  $fetcharry[0]="";
  $fetcharry[1]="";
  $fetcharry[2]="";
  $fetcharry[3]="";
  $fetcharry[4]="";
 

  $Name=isset($_POST["name"])?$_POST["name"]:"";
  $Email=isset($_POST["email"])?$_POST["email"]:"";
  $Password=isset($_POST["password"])?$_POST["password"]:"";
  $ConfirmPassword=isset($_POST["Confirm_password"])?$_POST["Confirm_password"]:"";
  $AdminType=isset($_POST["Admin_type"])?$_POST["Admin_type"]:"";


  if(isset($_POST["subBtn"]))
  {
    if(!empty($Name) && !empty($Email) && !empty($Password) && !empty($ConfirmPassword) && !empty($AdminType))
      {
        $insert=$conn->query("INSERT INTO `creat_user` (`Name`,`Email`,`Password`,`ConfirmPassword`,`AdminType`) VALUES ('$Name','$Email','$Password','$ConfirmPassword','$AdminType')");
        
          if($insert)
          {
            $message="<b style='color:green;'>Account Create Successfull</b>";
          }
          else
          {
            $message="<b style='color:red;' >Sorry !! Something is Wrong</b>";
          }
      }
      else
      {
        echo "<script>alert('Sorry! Field is empty')</script>";
      } 
    
  }

     if(isset($_POST["edtBtn"]))
  {
    if(!empty($Name) && !empty($Email) && !empty($Password) && !empty($ConfirmPassword) && !empty($AdminType))
    {
      $insert=$conn->query("REPLACE INTO `creat_user`(`Name`,`Email`,`Password`,`ConfirmPassword`,`AdminType`) VALUES ('$Name','$Email','$Password','$ConfirmPassword','$AdminType')");
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
      $select=$conn->query("SELECT * FROM `creat_user` WHERE `Email`='".$_GET["edtId"]."'");
       $fetcharry=$select->fetch_array();
    }


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>sign up</title>
      

      <script type="text/javascript">
          var check = function() {
            if (document.getElementById('password').value ==
              document.getElementById('confirm_password').value) {
              document.getElementById('message').style.color = 'blue';
              document.getElementById('message').innerHTML = 'matching';
            } else {
              document.getElementById('message').style.color = 'red';
              document.getElementById('message').innerHTML = 'not matching';
            }
          }
      </script>
  </head>
  <body>
    <form name="" method="post">

    <table class="table table-borderless" style="max-width: 80%; margin-top: 50px; background-color: #fff;" align="center">
      
      <thead class="bg-light" style="border-bottom: 1px solid #ccc;">
        <tr>
          <th scope="col"><h4>Sign Up</h4></th>
        </tr>

        <tbody>
          <tr>
            <td>
              <span>Name</span>
              <input type="text" name="name" value="<?php echo $fetcharry[0]; ?>" class="form-control">
            </td>
          </tr>

          <tr>
            <td>
              <span>Email</span>
              <input type="Email" name="email" value="<?php echo $fetcharry[1]; ?>" class="form-control">
            </td>
          </tr>

           <td>
              <span>Password</span>
              <input type="Password" name="password" value="<?php echo $fetcharry[2]; ?>" id="password" onkeyup='check();' class="form-control">
            </td>
          </tr>

           <td>
              <span>Confirm Password</span>
              <input type="Password" name="Confirm_password" value="<?php echo $fetcharry[3]; ?>" id="confirm_password"  onkeyup='check();'  class="form-control">
              <span id='message'></span>
            </td>
          </tr>

          <tr>
            <td>
              <span>Admin Type</span><br>
              <select type="text" class="form-control" name="Admin_type" style="max-width: 70%">
                <option>Select one</option>
                <option>Main Admin</option>
                <option>Sub Admin</option>
              </select>
            </td>
          </tr>

        <tr>
          <td colspan="2" align="center"><?php echo "$message" ?></td>
        </tr>

        </tbody>

        <tfoot>
          <tr>
            <td colspan="2" align="right">
              <button type="Submit" name="edtBtn" class="btn btn-primary">&nbsp;Edit&nbsp;</button>
              <a href="Creat_userView.php" type="Submit" target="osman" class="btn btn-info">&nbsp;View&nbsp;</a>
              <button type="Submit" name="subBtn" class="btn btn-success">&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;</button>
            </td>
          </tr>
        </tfoot>
      </thead>
    </table>

   </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>