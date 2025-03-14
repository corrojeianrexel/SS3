<!DOCTYPE html>
<head> 
	<title> PT5_PROBLEM#1 </title>
</head>
<style>
	h1 {
		.box{
			color: #2b3bd4;
			border: 3px solid #2b3bd4;
			padding: 5px;
			width: 50%;
	}
</style>

<?php
   echo "Enter the Upper Limit: 4";
   echo '<br>';
   $i = 1;
   $N = 4;
   $SS = 0;
   $CS = 1;
   do {
   	    $SS += $i = $i;
   	    $CS +=i = $i = $i;
   	    $i++;

   } while( $i <= 4);
   echo "The sum of squares from 1 to 4 is: $SS";
   echo "<br>";
   echo "The sum of cubes from 1 to 4 is: $CS";
   ?>
