<html>
	<head>
		<meta http-equiv="refresh" content="10"/>
		<style>
			div{
				background-color:#000;
				color:#fff;
				width:300px;
				margin:20% auto;
				text-align:center;
				padding:20px 50px;
			}
		</style>
	</head>
	<body>
	<div>
		<?php 
			date_default_timezone_set("Asia/Kolkata");
			echo date('H:i:s A');
		?>
	</div>
	</body>
</html>
