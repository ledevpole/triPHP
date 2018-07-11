<?php

// tri bulle
function init_tab($size = 15){

	$tab = array();

	for ($i=0; $i < $size ; $i++) { 
		$tab[$i] = rand(0,100);
	}

	return $tab;
}

function aff_tab ($tab, $header) {
	
	$str = "
		<!DOCTYPE html>
		<html>
		<head>
			<title>working</title>
		</head>
		<body>
		
	<TABLE>";
	$lig1 = "<tr><th>Indice</th>";
	$lig2 = "<tr><th> $header</th>";

	foreach ($tab as $key => $value) {
		$lig1 .= "<td>$key</td>";
		$lig2 .= "<td>$value</td>";

	}
	$lig1 .= "</tr>";
	$lig2 .= "</tr>";
	$str .= $lig1.$lig2."</TABLE></body>
		</html>";

	return $str;
}

function bubbleSort_dec ($tab) {

	for ($i=0; $i < sizeof($tab)-1; $i++) { 
		for ($j=0; $j < (sizeof($tab)-$i); $j++) { 
			if ($tab[$j] <  $tab[$j+1]) {
				$inter = $tab[$j];
				$tab[$j] = $tab[$j+1];
				$tab[$j+1] = $inter;
			} 
		}
	}
	return aff_tab($tab,"Tri decroissant");
}

function bubbleSort_cro ($tab) {

	for ($i=0; $i < sizeof($tab)-1 ; $i++) { 
		for ($j = sizeof($tab) -1;  $j >= $i ; $j--) { 
			if ($tab[$j] <  $tab[$j-1]) {
				$inter = $tab[$j];
				$tab[$j] = $tab[$j-1];
				$tab[$j-1] = $inter;
			} 
		}
	}
	return aff_tab($tab,"Tri croissant");
}

$tab = init_tab();
echo bubbleSort_dec($tab);
echo bubbleSort_cro($tab);
