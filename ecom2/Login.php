<?php
session_start();
unset($_SESSION["logstatus"]);

include("connection/connect.php");  


  $useremail=isset($_POST["email"])?$_POST["email"]:"";
  $userpass=isset($_POST["password"])?$_POST["password"]:"";


  $insert=$conn->query("SELECT * FROM `creat_user` WHERE `Email`='$useremail' AND `Password`='$userpass'");
  $fetcharry=$insert->fetch_array();


  if(isset($_POST["loginBtn"]))
  {
    if(!empty($useremail) && !empty($userpass))
    { 
      if($fetcharry[1]==$useremail and $fetcharry[2]==$userpass)
      {
         $_SESSION["logstatus"]=true;
         $_SESSION["type"]=$fetcharry[4];
        echo "<script>location='admin.php'</script>";
      }
      else
      {
        echo "<script>alert('Your Email or Password is Incorrect..');</script>";
      }
    }
    else
    {
      echo "<script>alert('Sorry !! Text Fields is empty...');</script>";
    }
  }



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


        <script type="text/javascript">
                        
               function myFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
              }

        </script>
  

  </head>
  <body style="background-color: #ccc;">
    <form name="" method="post" autocomplete="off">
    
   <table class="table table-borderless" style="max-width: 50%; background-color: #fff; margin-top: 50px;" align="center">
  <thead class="bg-light" style="border-bottom: 1px solid #ccc;">
    <tr>
      <th scope="col" colspan="2"><h4>Login</h4></th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>
        <span>Email</span>
        <input type="email" name="email" value="" class="form-control"></td>
    </tr>
    <tr>
     
     <tr>
      <td>
        <span>Password</span>
        <input type="password" name="password" value="" id="myInput" class="form-control">
        <input type="checkbox" onclick="myFunction()">Show Password
      </td>
    </tr>
    <tr>

      <tfoot>
        <tr>
          <td colspan="2" align="center">
            <button type="submit" name="loginBtn" class="btn btn-success">Login</button>
            <button type="button" class="btn btn-secondary">Cencle</button>
          </td>
        </tr>

        <tr>
          <td>
            <span>Do you have an account?<a href="Sign_Up.php">&nbsp;Sign Up</a></span>
          </td>
        </tr>
      </tfoot>
      
      
  </tbody>
</table>
</form>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>