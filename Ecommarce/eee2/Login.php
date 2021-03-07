<?php
  $email="sbit@gmail.com";
  $password="123";


  $userEmail=isset($_POST["email"])?$_POST["email"]:"";
  $userPass=isset($_POST["password"])?$_POST["password"]:"";

  if(isset($_POST["loginBtn"]))
  {
    if(!empty($userEmail) && !empty($userPass))
    {
      if($email==$userEmail and $password==$userPass)
      {
       echo "<script>location='admin.php'</script>";
      }
      else
      {
       echo "<script>alert('Your Email or Password is Incorrect..');</script>";
      }
    }
    else
    {
      echo "<script>alert('Sorry !! Text Fields is Empty...');</script>";
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
    <form name="" method="post">
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
     
      
      <td>
        <span>Password</span>
        <input type="password" name="password" value="" id="myInput" class="form-control">
        <input type="checkbox" onclick="myFunction()"> Show Password
      </td>
     
    </tr>
    <tr>
      <td colspan="2" align="center">
        <button type="submit" name="loginBtn" class="btn btn-success">Login</button>
        <button type="button" class="btn btn-secondary">Cancel</button>
      </td>
    </tr>

    <tr>
      <td colspan="2">
       <span>Do you have an Account?<a href="Sign_Up.html">&nbsp;Sign Up</a></span> 
      </td>
    </tr>
  </tbody>
</table>
</form>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>