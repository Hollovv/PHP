<?php 
function MyExpl(array $separator, string $string)
{
	$arr = str_split($string);
	$arr_length = count($arr);
	
	$sep = $separator;
	$sep_length = count($sep);
	
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
		           
        return $arr;
    }

$separatorArray = array(1, 2);
$pizza = "pice1pice2pice1pice2pice1pice2pice1pice2pice1pice2pice1pice";
$pieces = array();
$pieces = MyExpl($separatorArray, $pizza);                            

echo $pieces;          
