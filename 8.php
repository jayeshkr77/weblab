<html>
	<head>
		<style>
			table,tr,td{
				border:1px solid #ff0000;
			}
		</style>
	</head>
	<body>
		<table>
			<form method="post">
				<tr>
					<td>First Number</td><td><input type="text" name="num1" value="0" /></td>
					<td rowspan=2><input type="submit" value="calculate" name="submit"/></td>
				</tr>
				<tr>
					<td>Second Number</td><td><input type="text" name="num2" value="0" /></td>
				</tr>
			</form>
			
			
			<?php
				if(isset($_POST['submit'])){
					$num1 = $_POST['num1'];
					$num2 = $_POST['num2'];
					
					
					echo "<tr><td>Add</td><td>".($num1+$num2)."</td></tr>";
					echo "<tr><td>sub</td><td>".($num1-$num2)."</td></tr>";
					echo "<tr><td>mul</td><td>".$num1*$num2."</td></tr>";
					echo "<tr><td>div</td><td>".$num1/$num2."</td></tr>";
				}	
				
			?>
			
		</table>
	</body>
</html>
