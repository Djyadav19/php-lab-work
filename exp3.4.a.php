<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="lab.css">			
	</head>
    <body>
        <form method = "post">
            <input type = "number" name = "n1" placeholder="*Smaller no:" required/>
            <input type = "number" name = "n2" placeholder="*Larger no:" required/>
            <input type = "submit" name = "submit" value ="Find"/>
        </form>
        <?php
            if(isset($_POST['submit'])){
                echo "Multiples of 5 between " . $_POST['n1'] ." & ". $_POST['n2']. " : ";
                for($i = $_POST['n1']; $i <= $_POST['n2']; $i++){
                    if($i%5 == 0)
                        echo $i." ";
                }       
            }
        ?>
    </body>
</head>