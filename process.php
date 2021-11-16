<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Process Form</title>
</head>

<body>
	<?php
	$name = $_GET['name'];
	$email=$_GET['email'];
	$state = $_GET['state'];
	
	$str =  "Name: $name<br>";
	$str .= "Email: $email<br>";
	$str .= "State: $state<br>";
	
	echo $str;
	?>
</body>
</html>
