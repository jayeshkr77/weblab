<?php
	$states = "Mississippi Alabama Texas Massachusetts Kansas";
	$states1 = explode(" ",$states);
	
	$statelist = array();
	
	foreach($states1 as $i => $value){
		echo "states1 [".$i."] = ".$value."<br/>";
	}
	
	foreach( $states1 as $state){
		if(preg_match('/xas$/',$state))
			$statelist[0]=$state;
	}
	
	foreach($states1 as $state){
		if(preg_match('/^k.*s$/i',$state))
			$statelist[1]=$state;
	}
	
	foreach($states1 as $state){
		if(preg_match('/^M.*s$/',$state))
			$statelist[2]=$state;
	}
	
	foreach($states1 as $state){
		if(preg_match('/a$/',$state))
			$statelist[3]=$state;
	}
	echo "<br><br>";
	#print_r($states1);
	foreach($states1 as $i => $value){
		echo "stateslist [".$i."] = ".$value."<br/>";
	}
?>
