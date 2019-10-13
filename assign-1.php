<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "style1.css"/>
    </head>
    <body>
        <form method = "post">
            <h1>Area Calculator</h1>
            <input type = "number" name = "sap" placeholder = "SAP ID" required/>
            <input type = "submit" name = "submit" />
        </form>
        <?php
            if(isset($_POST['submit'])){
                $sap = $_POST["sap"];
                $S1 = $sap%10;
                $S2 = (int)(($sap%100)/10);
                $S3 = 2.5;
                $S5 = ($sap%100);
                $S4 = $S5 % 5;
                $S6 = $S5;
                $S7 = 1.5;

                function tri_area($a){
                    return (sqrt(3)/4)*$a*$a;
                }
                function rect_area($a, $b){
                    return $a * $b;
                }
                function sqr_area($a){
                    return $a * $a;
                }
                function semi_circle_area($r){
                    return (3.14 * $r * $r)/2;
                }
                echo "SAP ID : " . $_POST['sap'];
                echo "<br>Area of displayed figure : " . 
                    (tri_area($S1) + tri_area($S2) + semi_circle_area($S7) +
                    semi_circle_area($S3) + sqr_area($S4) + sqr_area($S5) +
                    semi_circle_area($S7 + $S3) + rect_area($S7 + $S3, $S1 + $S2));
            }
        ?>
    </body>
</html>