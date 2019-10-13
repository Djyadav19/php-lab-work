<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="lab.css">
    </head>
    <body>
        <form method = "post">
            <input type = "textbox" name = "numbers" placeholder = "*No seperated by space& must end with end integer" req>
            <input type = "submit" name = "submit" value="FIND"/>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $arr = explode(' ',$_POST['numbers']);
                $min = $arr[0];
                $max = $arr[0];
                foreach($arr as $x){
                    echo $x . " ";
                    if($x < $min)
                        $min = $x;
                    if($x > $max)
                        $max = $x;
                }
                echo "<br>Mininum : " . $min . "<br>Maximum : " . $max;
            }
        ?>
    </body>
</html>