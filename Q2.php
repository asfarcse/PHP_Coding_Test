<?php
	$arr = array(0,1,2,3,4,5,6,7,7,8,9,10,11,
		12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,27);
	$arr_length=sizeof($arr);
	$i;
	$j;
	for ($i=0; $i < $arr_length; $i++) 
	{ 
		for ($j=$i+1; $j < $arr_length; $j++) 
		{ 
			if ($arr[$i]==$arr[$j]) 
			{
				echo "Repeated Element: ",$arr[$i],"<br>";
			}
		}
	}
?>