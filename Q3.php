<?php
	$arr = array(0,0,1,1,0,0,0,1,0,0,1,1,1,0);

	$count=0;
	$res=0;
	$arr_length=sizeof($arr);

	for ($i=0; $i <$arr_length ; $i++) 
	{ 
		if($arr[$i]==0)
		
			$count=0;
		else
			$count++;
		$res=$count>$res ? $count:$res;
		
	}
	echo $res;

?>