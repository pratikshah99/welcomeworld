<?php 

	require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
	
	use HelloWorld\SayHello;
	
	echo SayHello::world();
	
	$a=10;
	$b=20;
	
	echo "<br><br>";
	
	echo SayHello::maximum($a,$b);
	
?>