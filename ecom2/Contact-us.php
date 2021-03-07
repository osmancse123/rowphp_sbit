<?php
include("connection/connect.php");
    
    $message="";
  
    $Details=isset($_POST["text"])?$_POST["text"]:"";

    if(isset($_POST["addBtn"]))
    {
      if(!empty($Details))
      {

        $insert=$conn->query("INSERT INTO `contact_us` (`id`,`Details`) VALUES ('1','$Details')
");

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


  ?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-beta.0/css/froala_editor.css">

    <title>contact Us</title>

    <script src='tinymce/tinymce.min.js'></script>

      <script type="text/javascript">
        tinymce.init({
        selector: '#myTextarea'
    });
      </script>


  </head>
  <body style="background-color:#f4f4f4;">
    <form name="" method="post">

    <br>

    <table class="table table-borderless bg-white" style="max-width:100%;" align="center">

      <thead>
        <tr>
           <th colspan="2" style="background-color:#E0FFFF; "><h3><center>Contact US</center></h3></th>
        </tr>
      </thead>

      <tbody>
            <?php

            $insert=$conn->query("SELECT * FROM `contact_us`");
            $fetcharry=$insert->fetch_array();
          ?>
       
         <tr>
          <td>
            <label><b>Details</b></label>
            <textarea id="myTextarea" name="text" class="form-control" cols="30" rows="10">
              <?php echo $fetcharry[1] ?>
            </textarea>

          </td>
        </tr>

        <tr>
          <td colspan="2" align="center"><?php echo $message ?></td>
        </tr>
        
        
      </tbody>

      <tfoot>
        <tr>
          <td colspan="2" align="center"> 
            <button type="submit" name="addBtn" class="btn btn-success" >Save</button>
            <button type="submit" name="" class="btn btn-primary">Edit</button>
            <button type="submit" name="" class="btn btn-danger">Delete</button>
            <button type="submit" name="" class="btn btn-secondary">Cencel</button>
           
          </td>
        </tr>
      </tfoot>
    </table>
    </form>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>