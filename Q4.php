<?php
	function printPair($arr,$sum)
	{
		for ($i=0; $i <sizeof($arr) ; $i++) 
		{ 
			$first=$arr[$i];
			for ($j=$i+1; $j < sizeof($arr); $j++) 
			{ 
				$second=$arr[$j];

				if($first+$second==$sum)
				{
					echo $first,",",$second,",";
					
				}
			}
		}
	}
	$arr = array(5,12,3,7,2,-3,-5,-9,5,-2);
	$sum=8;
	printPair($arr,$sum);
?>