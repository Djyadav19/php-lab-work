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
            function prime($n){
                if($n == 2 || $n == 3){
                        echo $n . " ";
                        return;
                }
                for($j = 2; $j <= (int)(sqrt($n)); $j++){
                    if($n%$j == 0 )
                        return;
                }
                echo $n . " ";
            }
            if(isset($_POST['submit'])){
                echo "All prime number between " . $_POST['n1'] ." & ". $_POST['n2']. " : ";
                for($i = $_POST['n1']; $i <= $_POST['n2']; $i++){
                    prime($i);    
                }       
            }
        ?>
    </body>
</head>