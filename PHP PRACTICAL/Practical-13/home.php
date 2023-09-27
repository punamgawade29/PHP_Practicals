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
		<form name="frmUser" method="post" action="logout.php" align="center">
	    	<input type="submit" name="submit" value="Logout">
		</form>
	<?php
	}else {
		header("Location:login.php");
	}
	?>
	
</body>
</html>

