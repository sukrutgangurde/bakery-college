<html>
<head>
	<?php require 'head.php';?>	
	<title></title>
</head>
<body>
	<?php
	if($_SESSION['admin']==null){
		header("location:adminlogin.php");
	}
	?>
<?php require 'menu.php';?>
<?php include 'bg2.php'?>
<?php require 'footer.php';?>
</body>
</html>
