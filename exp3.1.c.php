<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="lab.css">  
    </head>
    <body>
        <form method = "post">
            <input type = "textbox" name = "num" placeholder = "*Enter 'n' no. seperated by space" required/>
            <input type = "submit" name = 'submit'/>
        </form>
        <?php
            if(isset($_POST['submit'])){
                function evencheck($a){
                    echo $a . " : " ;
                    echo ($a%2 == 0)?'even<br>' : 'odd<br>';
                }

                $arr = explode(" ", $_POST['num']);

                foreach($arr as $i){
                    evencheck($i);
                }
                $sum = 0;
                foreach($arr as $i){
                    $sum += $i*$i;
                }
                echo "Sum of squares : " . $sum;
            }
        ?>
    </body>
</html>