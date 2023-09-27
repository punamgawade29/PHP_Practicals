<?php error_reporting(0);
function mypro($s)
{
 $count = 0;
 for($i=0; $i<100; $i++)
{
	if($s[$i]!="")
{
	$count++;
}
else 
{
break;
}
}
return $count;
}
 $result= mypro("Punam");
 echo"Length Of String:".$result;
?>
