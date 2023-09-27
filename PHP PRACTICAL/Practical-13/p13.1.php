<?php
$cookie_name = "user";
$cookie_value = "Punam Gawade";
$cookie_color = "color";
$cookie_val = "red";
setcookie($cookie_name, $cookie_value,$cookie_color, $cookie_val ,time() + 86400, "/"); // 86400 = 1 day
?>
<html>
<body style="background-color:pink;">
<center>

<?php
	if(!isset($_COOKIE[$cookie_name])) {
	  echo "Cookie named '" . $cookie_name . "' is not set!";
	} else {
	  echo "Cookie '" . $cookie_name . "' is set!<br>";
	  echo "Value is: " . $_COOKIE[$cookie_name];
	}
	echo "<br><br><br>";

	if(!isset($_COOKIE[$cookie_color])) {
	echo "Cookie named '" . $cookie_color . "' is not set!";
	} else {
	  echo "Cookie '" . $cookie_color . "' is set!<br>";
	  echo "Value is: " . $_COOKIE[$cookie_color];
	}
?>
</center>
</body>
</html>
