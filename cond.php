
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="lab.css">
	</head>
<body>

	<?php
		$t = date("H");
		if($t < "10")
			echo "Good morning !\n";
		else if ($t >= "10" &&  $t < "16")
			echo "Good Day! ";
		else if ($t >= "16" && $t < "20")
			echo "Good Evening!";
		else
			echo "Good Night! ";
	?>
</body>
</html>
