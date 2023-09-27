<html>
<form action="" method="post" style="box-shadow:5px 5px 5px gray; background:pink;">
<h1>
<body >
<center >
Student Information
</h1>
</center>
<br>
<center>
<table border=0>
<tr>
<td>
Name
</td>
<td>
<input type=text name="t1" value="First Name">		<!--TextBox-->
</td>
<td>
<input type=text name="t2" value="Last Name">		<!--TextBox-->
</td>
</tr>
<td>
Address
</td>
<td>
<input type=text name="t3">
</td>
<td>
<input type=hidden name="country" value="India">	<!--Hidden box-->
</td>
</tr>
<tr>
<td>
Email
</td>
<td>
<input type="text" name="t4">
</td>
</tr>
<tr>
<td>
Phone number
</td>
<td>
<input type="number" name="t5">
</td>
</tr>
<tr>
<td>
Language known
</td>
<td>
<select name="lang[]" multiple="multiple">		<!--List Box-->
<option>C++</option>
<option>Java</option>
<option>CSS</option>
</select>
</td>
</tr>
<tr>
<td>


Gender
</td>
<td>
<input type=radio name="r1" value="Male">
Male
</td>
<td>
<input type=radio name="r1" value="Female">
Female
</td>
</tr>
<tr>
<td>
Dob
</td>
<td>
<select name="y">
<option value="2000">2000</option>	<!--Combo Box-->
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
</select>
Year
</td>
<td>
<select name="m">
<option value="January">January </option>	<!--Combo Box-->
<option value="February">February </option>
<option value="March"> March </option>
<option value="April"> April </option>
<option value="May"> May </option>
<option value="June"> June </option>
<option value="July"> July </option>
<option value="August"> August </option>
<option value="September">September </option>
<option value="October">October </option>
<option value="November">November </option>
<option value="December">December </option>
</select>
Month
</td>
<td>
<select name="d">								<!--Combo Box-->
<option value="1"> 1 </option>
<option value="2"> 2 </option>
<option value="3"> 3 </option>
<option value="4"> 4 </option>
<option value="5"> 5 </option>
<option value="6"> 6 </option>
<option value="7"> 7 </option>
<option value="8"> 8 </option>
<option value="9"> 9 </option>
<option value="10"> 10 </option>
<option value="11"> 11 </option>
<option value="12"> 12 </option>
<option value="13"> 13 </option>
<option value="14"> 14 </option>
<option value="15"> 15 </option>
<option value="16"> 16 </option>
<option value="17"> 17 </option>
<option value="18"> 18 </option>
<option value="19"> 19 </option>
<option value="20"> 20 </option>
<option value="21"> 21 </option>
<option value="22"> 22 </option>
<option value="23"> 23 </option>
<option value="24"> 24 </option>
<option value="25"> 25 </option>
<option value="26"> 26 </option>
<option value="27"> 27 </option>
<option value="28"> 28 </option>
<option value="29"> 29 </option>
<option value="30"> 30 </option>
<option value="31"> 31 </option>
</select>
Day
</td>
</tr>
</table>
</center>
<br>
<br>
<center>
<input type=submit value="submit" name="s">
</center>
</form>
<?php
if(isset($_POST['s']))
{
$y=array(); //array creation
$t=-1;
$a=$_POST['t1']; //accessing value for first text box
$b=$_POST['t2']; //accessing value for second text box
$b11=$a." ".$b; //concatenation of $a and $b
$c=$_POST['t3']; //accessing value for third text box
$d=$_POST['t4']; //accessing value for 4th text box
$e=$_POST['t5']; //accessing value for 5th text field
$f=$_POST['y']; //accessing value from first Combobox
$g=$_POST['m']; //accessing value from second Combobox
$h=$_POST['d']; //accessing value from third Combobox
$i1=$_POST['r1']; //accessing value for radio button
$j=$f." ".$g." ".$h; //dob
$k=$_POST['country']; //accessing value for hidden box

//display Values...

echo "<center><h1>Informations are</h1></center>";
echo "<center><font size=4><b>Name:-</b></font>".$b11."</center><br>";
echo "<center><font size=4 ><b>Address:-</b></font>".$c."</center><br>";
echo "<center><font size=4 ><b>Country:-</b></font>".$k."</center><br>";
echo "<center><font size=4><b>Email:-</b></font>".$d."</center><br>";
echo "<center><font size=4><b>Phone Number:-</b></font>".$e."</center><br>";
if (is_array ( $_POST ['lang'] )) {
print "<center><font size=4><b>Languages Known</b></font>";
foreach ( $_POST ['lang'] as $value ) {
print "$value</center>";
}
}
echo "<center><font size=4><b>Gender:-</b></font>".$i1."</center><br>";
echo "<center><font size=4><b>Dob:-</b></font>".$j."</center><br>";
}
?>
</html>
