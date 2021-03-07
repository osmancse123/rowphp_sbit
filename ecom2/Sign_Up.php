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
    <table class="table table-borderless" style="max-width: 50%; margin-top: 50px; background-color: #fff;" align="center">
      
      <thead class="bg-light" style="border-bottom: 1px solid #ccc;">
        <tr>
          <th scope="col"><h4>Sign Up</h4></th>
        </tr>

        <tbody>
          <tr>
            <td>
              <span>Email</span>
              <input type="Email" name="" value="" class="form-control">
            </td>
          </tr>

           <td>
              <span>Password</span>
              <input type="Password" name="password" value="" id="password" onkeyup='check();' class="form-control">
            </td>
          </tr>

           <td>
              <span>Confirm Password</span>
              <input type="Password" name="Confirm_password" value="" id="confirm_password"  onkeyup='check();'  class="form-control">
              <span id='message'></span>
            </td>
          </tr>

        </tbody>

        <tfoot>
          <tr>
            <td colspan="2" align="right">
              <button type="Submit" class="btn btn-success">&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;</button>
            </td>
          </tr>

          <tr>
            <td>
              <span>Already have an account<a href="Login.php">&nbsp;Login</a></span>
            </td>
          </tr>


        </tfoot>
      </thead>
    </table>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>