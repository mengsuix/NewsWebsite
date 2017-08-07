<?php
   function countPg($count,$value)
   {
	$temp = $count / $value;
	if( $temp > intval($temp) )
		$temp = intval($temp) + 1;
	return $temp;
   }
