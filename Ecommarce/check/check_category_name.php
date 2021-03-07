
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




//this "item" is a varriable of pdt page


  $select=$connection->query("select * from category_info where item_name='".$_REQUEST['item']."'");

  print "<option>"."....Select One....."."</option>";
  while($arry= $select->fetch_array())
   {

	print "<option>".$arry[2]."</option>";
}	
	
?>