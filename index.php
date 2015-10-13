<?php
session_start();
if ($_SESSION['loggedin'] != 1)
{
	/*
		if not logged in just redirect to login.html 
	*/
	$serverName = $_SERVER['HTTP_HOST'];
	$url = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'login.html';  
	//redirect to location $extra
	header('Location: '.$extra, true, 303);
	die();
}
/*
at this point it means that the user is already logged in so just continue with html for index
*/
?>
<html>
	<head>		
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet" >
	</head>
	
	<body>		
		<div class="panel panel-body">
		<h2>
			Hello World	
		</h2>
		</div>
		<script src="js/libs/jquery-1.11.0.min.js"/>
		<script src = "js/libs/bootstrap.js" />
		<script src = "js/paw.js"/>
	</body>
</html