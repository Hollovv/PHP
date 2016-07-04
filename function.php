<?php 

function myExpl(array $separator, string $string)
{
	$arr = str_split($string);
	$arr_length = count($arr);
	
	$sep_length = count($separator);
	
	$result = '';
	
	if (
	   $separator == "" ||
	   $separator == false ||
	   $separator == null
	) { 
	    return false;
	}
	
	for ($i = 0; $i < $arr_length; $i++) {
	   	for ($j = 0; $j < $sep_length; $j++) {
	    	if ($arr[$i] == $separator[$j]) {
	    	    $arr[$i] = ' ';
	    	}
	   	}
	}
		 
	foreach ($arr as $value) {
	   	$result = $result.$value;
	}
	
	return $result;
}

function myExplAlt(array $separator, string $string)
{
	$arr = str_split($string);
	$arr_length = count($arr);
	
	$sep_length = count($separator);
	
	$isDoing;
	$sepPos;
	
	$result = '';
	
	if (
	    $separator == "" ||
	    $separator == false ||
	    $separator == null
	) { 
	   	return false;
	}
	
	for ($i = 0; $i < $sep_length; $i++) {
		do {
		   	$isDoing = true;
			$sepPos = array_search($separator[$i], $arr);
			
			if ($sepPos != false) {
				$arr[$sepPos] = ' ';
			} else {
				$isDoing = false;
			}
		} while ($isDoing);
	}
	
	foreach ($arr as $value) {
		$result = $result.$value;
	}
	
	return $result;
}

$separatorArray = array(1, 2);
$pizza = "pice1pice2pice1pice2pice1pice2pice1pice2pice1pice2pice1pice";
$pieces = myExpl($separatorArray, $pizza);                            

echo $pieces;
