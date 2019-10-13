<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="lab.css">			
	</head>

	<body>
		<form method = "post">
			<input type = "textbox" name = "numbers" placeholder = "*Check even or odd" required/>
			<input type = "submit" name = "submit" value="CHECK"/>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$arr = explode(' ',$_POST['numbers']);
				foreach($arr as $i){
					echo $i . " : " . (($i%2 == 0)?"even":"odd") . "<br>";
				}
			}
		?>
	</body>

</html>
