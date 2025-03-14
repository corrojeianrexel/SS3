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
echo "Enter N:6";
echo "<br>";
$N = 6;
$i = 1;
$sum = 0.0;
do {
	$sum += 1.0 / $i;
	$i++;
}  while ($i <= $N);
echo "sum is $sum";
?>