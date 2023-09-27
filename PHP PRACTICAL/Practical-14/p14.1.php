<html>
<head>
<title> Email using PHP</title>
</head>
<body>
<?php
$to=”xyz@example.com”;
$subject=”Test mail”;
$message=”This is HTML message”;
$header=”From: abc@gmail.com”;
$header .= “Cc:pqr@xyzdomain.com”;
$retvalue=mail($to,$subject,$message,$header);
If($retvalue == true)
{
Echo “ Message sent successfully”;
}
Else
{
Echo “ Message could not be sent”;
}
?>
</body>
</html>


