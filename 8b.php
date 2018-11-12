<?php
	$matA = array(array(1,2,3),array(4,5,6),array(7,8,9));
	$matB = array(array(1,2,5),array(4,5,6),array(7,8,9));
	
	$m = count($matA);
	$n = count($matA[0]);
	$p = count($matB);
	$q = count($matB[0]);
	
	echo "matrix A: <br />";
	for( $i=0 ; $i < $m ; $i++){
		for( $j=0 ; $j < $n ; $j++)
			echo " ".$matA[$i][$j];
			
		echo "<br />";
	}	
	
	echo "matrix B: <br />";
	for( $i=0 ; $i < $m ; $i++){
		for( $j=0 ; $j < $n ; $j++)
			echo " ".$matB[$i][$j];
			
		echo "<br />";
	}
	
	echo "Transpose of matrix A: <br />";
	for( $i=0 ; $i < $m ; $i++){
		for( $j=0 ; $j < $n ; $j++)
			echo " ".$matA[$j][$i];
			
		echo "<br />";
	}
	
	
	
	$res = array();
	echo "mul of matrix A B: <br />";
	for( $i=0 ; $i < $m ; $i++){
		for( $j=0 ; $j < $q ; $j++){
			$res[$i][$j] = 0;
			for($k=0;$k<$n;$k++){	
				$res[$i][$j] += ($matA[$i][$k]*$matB[$k][$j]);
			}
		}
	}
	
	for( $i=0 ; $i < $m ; $i++){
		for( $j=0 ; $j < $n ; $j++)
			echo " ".$res[$i][$j];
			
		echo "<br />";
	}
	
	
	
	
	echo "matrix A+ matrix B: <br />";
	for( $i=0 ; $i < $m ; $i++){
		for( $j=0 ; $j < $n ; $j++)
			echo " ".($matA[$i][$j]+$matB[$i][$j]);
			
		echo "<br />";
	}
?>
