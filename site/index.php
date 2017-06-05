<?php 
	header('Content-Type: text/html; charset=utf-8');
	session_start();

	//Osztályok betöltése
	function __autoload($className)
	{
		$fileName = 'class/'.$className.'.class.php';
		require_once $fileName;
	}

	/*
		echo session_id().'<br>';
		session_regenerate_id();
		echo session_id();
		print_r($_SESSION); 
	*/

 ?>
<!DOCTYPE html> 
<html>
<head>
	<title>FrontEnd</title>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js" ></script>
	<script type="text/javascript" src="js/myScript.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>

	
<?php 
	require_once("includes/mainNavigation.php");
 ?>

</body>
</html> 
