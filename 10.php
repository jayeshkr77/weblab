<html>
	<head>
		<title> </title>
		<style>
			table,th,td{
				width:33%;
				border:1px solid black;
				text-align:center;
				background-color:lightblue;
				border-collapse:collapse;
			}
			table{
				margin:auto;
			}
		</style>
	</head>
	<body>
		<?php
			$a=[];
			$conn = mysqli_connect('139.59.66.232','harsh','bjn721','weblab');
			if($conn->connect_error){
				die("connection error ".$conn->connect_error);
			}
			
				
			$result = $conn->query("select * from student;");
			#print_r($result);
			echo "<table><caption><h1>Before sorting</h1></caption>";
			echo "<tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
			
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					echo "<tr><td>".$row['usn']."</td><td>".$row['name']."</td><td>".$row['address']."</td></tr><br/>";
					array_push($a,$row['usn']);
				}
			}
			echo "</table>";
			
			#print_r($a);
			echo "<br/>";
			
			$n = count($a);
			
			for($i = 0 ; $i < $n-1 ; $i++ ){
				$pos = $i;
				
				for($j = $i+1 ; $j < $n ; $j++ ){
					if($a[$pos] > $a[$j]){
						$pos = $j;
					}
				}
				
				if($pos != $i){
					$temp = $a[$i];
					$a[$i] = $a[$pos];
					$a[$pos] = $temp;
				}
				
			}
			
			#print_r($a);
			echo "<br/>";
			$c=[];
			$b=[];
			
			$result = $conn->query("select * from student;");
			#print_r($result);
			echo "<table><caption><h1>After sorting</h1></caption>";
			echo "<tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
			
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					for($i=0;$i<$n;$i++){
					
						if($row['usn'] == $a[$i]){
							$c[$i] = $row['name'];
							$b[$i] = $row['address'];
						}
						
					}
				}
			}
			
			#print_r($c);
			#echo "<br />";
			#print_r($b);
			
			
			for($i=0 ; $i < $n ; $i++){
				echo "<tr><td>".$a[$i]."</td><td>".$c[$i]."</td><td>".$b[$i]."</td></tr>";
			}
			
			echo "</table>";
			
						
		?>
		
	</body>
</html>
