<?php 
function MyExpl(array $separator, string $string):array
{
	$arr = str_split($string);
	$arr_length = count($arr);
	
	$sep_length = count($separator);
	
	if($separator == "" ||
	   $separator == false ||
	   $separator == null) 
		return false;
	
	for($i=0; $i<$arr_length; $i++){
		for($j=0; $j<$sep_length; $j++)
			if($arr[$i] == $sep[$j])
				$arr[$i] = " ";
	
		echo $arr[$i];
	}
		/*else
				echo $arr[$i];
		/*foreach($separator as $delimiter){
                echo "$value ";
                if($value == $delimiter){
                    $value = " ";
                    echo $value."-".$delimiter;
                    break;
                }
            }*/
		 
	foreach($arr as $value)
		$result = $result.$value;
	return $result;
    }

function MyExplAlt(array $separator, string $string)
{
	$arr = array();
	$arr = str_split($string);
	$arr_length = count($arr);
	
	$sep_length = count($separator);
	
	$isDoing = true;
	$sepPos;
	
	$result = '';
	
    echo $sep_length.' ';
	if($separator == "" ||
	   $separator == false ||
	   $separator == null) 
		return false;
	
	for($i=0; $i<$sep_length; $i++)
		do{
			$sepPos = array_search($separator[$i], $arr);
		echo $sepPos.'<br />';
		if($sepPos != false) 
				$arr[$sepPos] = ' ';
		else
				$isDoing = false;
		}	
		while($isDoing);
	
	foreach($arr as $value)
		$result = $result.$value;
	return $result;
}

$separatorArray = array(1, 2);
$pizza = "pice1pice2pice1pice2pice1pice2pice1pice2pice1pice2pice1pice";
$pieces = MyExplAlt($separatorArray, $pizza);                            

echo $pieces;