<!DOCTYPE html>
<html>
<head>
	<title>namta</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">  
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.exzoom.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body style="background-color: #ccc;">
	<form name="" method="post">
		<table style="width: 250px; background-color: #f4f4f4; margin-top: 20px; box-shadow: 0px  0px 5px 5px blue" align="center">
			<thead>
		      <tr>
		        <th>
		          <h3 class="d-3 text-dark text-center"><span style="">Namta</span></h3>
		        </th>
		      </tr>
		    </thead>
		    <!-- break -->

		    <tbody>
		    	<tr>
		    		<td>
		    			<input type="text" name="x" value="" placeholder="input here" class="form-control" required="" style="max-width: 90%">
		    		</td>
		    	</tr>


		    	<tr>
		    		<td>
		    			<?php
		    					
		    					$x=@$_POST["x"];
		    					if (isset($_POST["Result"]))
		    					{
		    						for ($y=1; $y<=10; $y++) 
		    						{ 
		    							$z=$x*$y;
		    							print"<br>$x*$y=$z";
		    						}
		    					}


		    			   ?>
		    			


		    		</td>
		    	</tr>
		    </tbody>
		    <!-- break -->

		    <tfoot>
		    	<tr>
		    		<td>
		    			<button class="btn btn-lg btn-success" name="Result" >Result</button>
		    		</td>
		    	</tr>
		    </tfoot>
		</table>
		
	</form>

<!-- break -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/owl.carousel.min.js"></script>
   <script type="text/javascript" src="js/jquery.exzoom.js"></script>
</body>
</html>