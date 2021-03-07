<?php

	$x=10;
	$y=15;
	$z=$x+$y;
	print "result".$z;

	if($x>$y)
	{
		echo "<br>large number $x" ;
	}
	else
	{
		echo "<br>large number $y" ;
	}

	// for ($a=$x; $a<=$y; $a++) 
	// { 
	// 	print "<br>$a";
	// }


	// $a=$x;
	// while($a<=$y)
	// {
	// 	$a++;
	// 	print "<br> $a";
	// }


	$a=$x;
	do
	{
		$a++;
		print "<br> $a";
	}
	while ($a!=$y);
	

?>