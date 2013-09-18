<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP</title>
<link href='http://fonts.googleapis.com/css?family=Kavoon' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!--[if IE 7]>
	<link href="css/font-awesome-ie7.min.css" rel="stylesheet" type="text/css">
<! [endif]-->

<link href='css/main.css' rel='stylesheet' type='text/css'>

</head>

<body>


	<?php
		// on met $_POST qd le formulaire est en POST et $_GET lorsqu'on est en GET
		$myvars = $_POST;

		echo '<pre>';
		print_r($myvars);
		echo '</pre>';

	?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script language="JavaScript" src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>