<?php
session_start();
error_reporting(1);
if($_SESSION["logstatus"]==true)
{


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin panel</title>
  </head>
  <body style="background-color: #ccc;">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 bg-light" style="height: 100px;"><br><h2>Admin Panel</h2></div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 bg-dark">
             

             <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about_us.php" target="osman">About us</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="Contact-us.php" target="osman">contact us</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#" target="osman">Terms and condition</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Gallary</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Log Out</a>
                  </li>
                 
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 bg-light"><br>
          
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action active">
                Left Side ber
              </button>
              <a href="Item_information.php" target="osman" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action">Item Imformation</button></a>

              <a href="Category_Information.php" target="osman" style="text-decoration: none;><button type="button class="list-group-item list-group-item-action">Category Imformation</button></a>

              <a href="product_information.php" target="osman" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action">Product Imformation</button></a>

              <a href="Customer_information.php" target="osman" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action">Customer Imformation</button></a>
              
              <?php
                if($_SESSION["type"]=="Main Admin")
                {
                  ?>

              <a href="Creat_user.php" target="osman" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action">Creat Admin</button></a>
     
                <?php
                }
              ?>

            </div>
        </div>

          
          <div class="col-lg-8 col-md-8 col-sm-8 bg-white"><br>
             
            <div class="embed-responsive embed-responsive-4by3">
              <iframe class="embed-responsive-item" name="osman"></iframe>
            </div>
         </div>
       </div>
           
      <div class="row">
        <div class="col-12 bg-primary" style="height: 50px;">
          <span class="float-right"><h6 style="padding-top: 15px; color: yellow;">Design by <span style="color: white">tanjil@</span> </h6></span>
        </div>
      </div>


    </div>
    

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

}
else
{
    echo "<h4>You Can not Authorize to see this page. You are fack Person...</h4>";
}
?>
  <a href="Login.php"><h3>login Again</h3></a>
<?php

?>