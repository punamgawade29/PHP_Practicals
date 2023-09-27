<?php

function sum($Html,$java,$english,$javascript)
{

 $s= $Html+$java+$english+$javascript;
 return $s;

}

function percent($ttl)
{
	$per= $ttl/4;

	echo $per."%";
}

$total=sum(60,78,90,73);

percent($total);


echo "<br>";
echo "Total= $total";
         ?>

