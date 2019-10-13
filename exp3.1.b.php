<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="lab.css">			
	</head>
    <body>
        <form method = "post">
            <input type = "number" name = "n" placeholder="*To print table:" required/>
            <input type = "submit" name = "submit" value ="PRINT"/>
        </form>
        <?php
            function table($n){
                for($i = 0; $i <= 10; $i++){
                    echo $n ." X ".$i." = ".$n*$i."<br>";
                }
            }
            if(isset($_POST['submit'])){
                echo "Table of the given number is : " . $_POST['n'] ."<br>";
                table($_POST['n']);      
            }
        ?>
    </body>
</head>