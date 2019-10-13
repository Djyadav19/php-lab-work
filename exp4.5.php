<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="lab.css">
    </head>
    <body>
        <form method = "post">
            <input type = "text" name = "array"/>
            <input type = "submit" name = "submit"/>
        </form>
        <?php
            function __sort(&$arr, $s, $n){
                for($i = $s; $i<$n-1; $i++)
                    for($j = $i+1; $j<$n; $j++)
                        if($arr[$i]>$arr[$j])
                            $arr[$i] = $arr[$i] + $arr[$j] - ($arr[$j] = $arr[$i]);
            }
            function sort_(&$x, $n){
                $left=0;
                $right = $n-1;
                $even_count = 0;
                while($left<$right){
                    while($x[$left]%2 == 0 && $left<$right){
                        $even_count++;
                        $left++;
                    }
                    while($x[$right]%2 != 0 && $left<$right){
                        $right--;
                    }
                    if($left<$right){
                        $x[$left] = $x[$left] +  $x[$right] - ($x[$right] = $x[$left]);
                    }
                }
                __sort($x, 0, $even_count);
                __sort($x, $even_count, $n);

            }
            if(isset($_POST['submit'])){
                $arr = explode(' ', $_POST['array']);
                $n = sizeof($arr)/sizeof($arr[0]);
                sort_($arr, $n);

                for($i = 0; $i<$n; $i++)
                    echo $arr[$i] . " ";
            }
        ?>
    </body>
<html>