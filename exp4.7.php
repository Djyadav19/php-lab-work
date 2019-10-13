<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="lab.css">
    </head>
    <body>
        <form method = "post">
            <input type = "text" name = "marks" placeholder = "Enter the marks space separated"/>
            <input type = "submit" name = "submit" value="Calculate"/>
        </form>
        <?php
            function find_average($marks){
                $sum = 0;
                $subjects = 0;
                foreach($marks as $x){
                    $sum += $x;
                    $subjects++;
                }
                return $sum/$subjects;
            }
            if(isset($_POST['submit'])){
                $marks = explode(' ', $_POST['marks']);
                echo "Average marks : " . find_average($marks);
            }
        ?>
    </body>
</html>