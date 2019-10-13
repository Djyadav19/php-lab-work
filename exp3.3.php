<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="lab.css">			
	</head>
    <body>
        <form method="post">
            <input type = "textbox" name = "n1" placeholder="*First string:" required/>
            <input type = "textbox" name = "n2" placeholder="*Second string:" required/>
            <input type = "submit" name = "submit" value ="SWAP"/><BR>
        </form>
        <?php

            function swap_val($a, $b){
                $temp = $a;
                $a = $b;
                $b = $temp;
                echo "Swap call by value:       ".$a . " " . $b . "<br><br>";
            }
            function swap_ref(&$a, &$b){
                $temp = $a;
                $a = $b;
                $b = $temp;
                echo "Swap call by reference:       ".$a . " " . $b . "<br><br>";
            }
            if(isset($_POST['submit'])){
                $a = $_POST['n1'];
                $b = $_POST['n2'];
                echo "String entered by you:        ".$a . " " . $b . "<br><br>";


                swap_val($a, $b);
                echo"original value after swapping done by  call by value:      ". $a . " " . $b . "<br><br>";

                swap_ref($a, $b);
                echo"original value after swapping done by  call by reference:      ". $a . " " . $b . "<br><br>";
            }
        ?>
    </body>
</html>
