<?php

	$arr = array(7,1,5,3,12,10,14);
	$sum=0;
	$arr_length=sizeof($arr);
	for ($i=0 ; $i < $arr_length ; $i++ ) 
	{ 
		$sum=$sum+$arr[$i];
	}
	echo "Sum Of given Array is: ",$sum;
?>