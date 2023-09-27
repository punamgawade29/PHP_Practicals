<?php
    session_start();
    if(count($_POST)>0) {
        if( $_POST["user_name"] == "admin" and $_POST["password"] == "admin123")
        $_SESSION["username"] = $_POST["user_name"];
    }
    if(isset($_SESSION["username"])) {
        header("Location:home.php");
    }
?>
<html>
<head>
<title>User Login</title>
</head>
<body style="background-color:pink;">
<form name="frmUser" method="post" action="" align="center">
    <h3 align="center">LOGIN FORM</h3>
    <br>
     <input type="text" name="user_name" placeholder="Enter your username" required>
     <br>
     <br>
    <input type="password" name="password" placeholder="Enter your Password" required>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
