<?php
session_start();
?>
<html>
<head>
<title>Home</title>
</head>
<body>

<?php
	if($_SESSION["username"]) {
	?>
		Welcome <?php echo $_SESSION["username"]; ?>. 
		<form name="frmUser" method="post" action="p13.4.php" align="center">
	    	<input type="submit" name="submit" value="Logout">
		</form>
	<?php
	}else {
		header("Location:p13.2.php");
	}
	?>
	
</body>
</html>

