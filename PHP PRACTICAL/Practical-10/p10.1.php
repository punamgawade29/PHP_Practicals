<!DOCTYPE html>
<html>
 <head>
     
	 <style>
	
	 </style>
     
 </head>   

  <body style="background:pink;">
  
        <h1 >Registration form</h1>
             
        <form action="<?php $_PHP_SELF ?>" method="POST">

                 Name<br><input type="text" name="name" required><br><br>
				 Collage Name<br><input type="text" name="clg" required><br><br>
				 Enrollment NO<br> <input type="text" name="eno" required><br><br>
				 Password<br> <input type="text" name="psd" required><br><br>
                 Gender<br>
                              <input type="radio" name="gender"  value="male" required>Male
                              <input type="radio" name="gender" value="female" required>Female   
                               <br><br>
                Lang<br>
                          <input type="checkbox"  name="checkbox[]" value="php" >PHP
                          <input type="checkbox"  name="checkbox[]" value="Android">Android  
                           <br><br>
      
            	       <input type="submit" name="submit" value="SUBMIT">  
        </form>

</body>
</html>

<?php                                                   
    	    if(isset($_POST['submit']))
    	    {
         	    $name= $_POST['name'];
       	    $gender= $_POST['gender'];
			$EnrollmentNO=$_POST['eno'];
         
                       echo "<h3>***USER DATA***</h3>";
                       echo "<b>Name: </b>".$name."<br>";
                       echo "<b>Gender: </b>".$gender."<br>";
					    echo "<b>EnrollmentNO: </b>".$EnrollmentNO."<br>";
                       echo "<b>Lang(s): </b>";

                       foreach($_POST['checkbox'] as $value)
         	    {
               		echo $value." ";
          	     }
             }    
  ?>
