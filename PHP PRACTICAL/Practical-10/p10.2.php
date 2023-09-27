<html>
<head>**********Registration Page**********</head></br></br>


<form action="actioned.php" method="post">
Enter Your Name  : <input type="text box" name="Name"></br></br>
Select Gender  :
<input type="radio" name="gender" value="Male" required>
male
<input type="radio" name="gender"value="Female" required>
Female
</br></br>
Select course  :
<input type="checkbox" name="course1" value="c" >
 c.
<input type="checkbox" name="course2" value="cpp">
 cpp.
<input type="checkbox" name="course3" value="java">
 php.
<input type="checkbox" name="course4" value="php">
 java.
 </br></br>
<input type="submit" name="submit">
</form>
</body>
</html>






<html>
<body>
<?php
echo("name :");

echo($_POST['Name']);
echo("</br>");
echo("gender :");
echo($_POST['gender']);
echo("</br>");
echo("selected course :");

echo($_POST['course1']);

?>

