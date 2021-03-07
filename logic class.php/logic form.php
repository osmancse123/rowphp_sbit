<?php
$x=$_POST["X"];
$y=$_POST["Y"];
if(isset($_POST["add"]))
{
	$z=$x+$y;
	print "result:".$z;
}
if(isset($_POST["sub"]))
{
	$z=$x-$y;
	print "result:".$z;
}
if(isset($_POST["mul"]))
{
	$z=$x*$y;
	print "result:".$z;
}
if(isset($_POST["div"]))
{
	$z=$x/$y;
	print "result:".$z;
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>logic class php</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
  	<form name="" method="post">
	<table class="table table-bordered" style="height: 400px width: 400px;" align="center">
		<thead>
			<th>
				<td colspan="2"><h2>Result</h2></td>
			</th>
		</thead>

		<tbody>
			<tr>
			<td>1st Input</td>
			<td><input type="text" name="X" value="" class="form-control"></td>
			</tr>

			<tr>
			<td>2st Input</td>
			<td><input type="text" name="Y" value="" class="form-control"></td>
			</tr>
		</tbody>

		<tr>
			<td colspan="2" align="center">
				<button type="submit" class="btn btn-success" name="add">Add</button>
				<button type="submit" class="btn btn-primary" name="sub">Sub</button>
				<button type="submit" class="btn btn-danger" name="mul">Multiple</button>
				<button type="submit" class="btn btn-info" name="div">Division</button>
				<button type="submit" class="btn btn-secondary" name="">Cancel</button>
			</td>
		</tr>
		
	</table>	
  	</form>

  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>

