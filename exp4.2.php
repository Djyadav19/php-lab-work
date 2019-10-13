<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="lab.css">
    </head>
<body>
	<form method= "post" action= "<?php echo $_SERVER['PHP_SELF'];?>">
	Name: <input type="text" name="fname"><br>
	<input type="radio" name="gender" value="Male" value="Male">Male<br>
	<input type="radio" name="gender" value="Female">female<br>
	<input type="submit" value = "Submit"><br>
	</form>

	<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = htmlspecialchars($_REQUEST['fname']);
			if($_POST['gender'] == "")
                    echo "<br><b>NO gender input!!!</b>";
             else
                    echo "<br>Resultant Data :<br> Your Gender:  " . $_POST['gender'] . "<br> Your Good Name: " . $name ;
            
		}
	?>
</body>
</html>
