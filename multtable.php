<?php

if (!isset($_GET["min-multiplicand"])){
	echo 'Missing min-multiplicand!' ;
}
if (!isset($_GET["max-multiplicand"])){
	echo 'Missing max-multiplicand!';
}
if (!isset($_GET["min-multiplier"])){
	echo 'Missing min-multiplier!';
}
if (!isset($_GET["max-multiplier"])){
	echo 'Missing max-multiplier!';
}

else{
	$min_multiplicand = $_GET["min-multiplicand"];
	$max_multiplicand = $_GET["max-multiplicand"];
	$min_multiplier = $_GET["min-multiplier"];
	$max_multiplier = $_GET["max-multiplier"];
}

function checkInt ($var) {
	if (!is_numeric($var)){
		echo $var.' is not an integer!';
		return 0;
	}
	else 
		return 1;
}

if ($min_multiplicand != null && $min_multiplier != null && $max_multiplier != null && $max_multiplicand != null){
	if (checkInt($min_multiplicand) != 0 && checkInt($max_multiplier) != 0 && checkInt($max_multiplicand) != 0 && checkInt($min_multiplier) != 0){

		if($min_multiplicand > $max_multiplicand){
			echo 'Error!! Min-multiplicand is larger than max-multiplicand!';
		}

		else if ($min_multiplier > $max_multiplier){
			echo 'Error!! Min-multiplier is larger than max-multiplier!';
		}	
	}

	if (($min_multiplicand <= $max_multiplicand)&& ($min_multiplier <= $max_multiplier)){
		$table='<table border="1">';
		$max_ier = $max_multiplier;
		$max_cand = $max_multiplicand;
		$min_ier = $min_multiplier;
		$min_cand = $min_multiplicand;

		for($r=0; $r < ($max_multiplicand - $min_multiplicand + 2); $r++){
		    $table .= '<tr>';
		    for($c=0; $c < ($max_multiplier - $min_multiplier + 2); $c++){
		    	if ($r == 0 && $c == 0)
		    		$table .= "<td>". "</td>";
		    	
		    	else if ($r != 0 && $c != 0)
		        	$table .= "<td>" . (($r + $min_multiplicand - 1) * ($c + $min_multiplier -1) ) . "</td>";
		        
		        else if ($r == 0 && $c !=0){
		        	$table .= "<td>".$min_ier . "</td>";
		        	$min_ier ++;
		        }
		        else if ($c == 0 && $r != 0){
					$table .= "<td>".$min_cand. "</td>";
					$min_cand ++;
		        }
		    }	
		    
		    $table .= '</tr>';
		}

		$table .= '</table>';
		echo $table;
	}
}


?>










