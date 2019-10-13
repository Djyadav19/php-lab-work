<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="lab.css">
    </head>
    <body>
        <form method="POST">
            <input type="textbox" name="name" placeholder="*Enter your name:" required/><br>
            <input type="radio" name="gender" value="Mr."> Male <br>
            <input type="radio" name="gender" value="Mrs."> Female<br>
            <input type="radio" name="gender" value="Mr.">Don't want to share<br>
            <input type="submit" name="submit" value="Submit" />
        </form>
        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];               
                $vcount = 0;
                $spacecount = 0;
                $n = strlen($name);
                for($i = 0; $i < $n; $i++){
                    if($name[$i] == "a"||$name[$i] == "e"||$name[$i] == "i" || $name[$i] == "o" || $name[$i] == "u")
                        $vcount++;
                    if($name[$i] == "A"||$name[$i] == "E"||$name[$i] == "I" || $name[$i] == "O" || $name[$i] == "U")
                        $vcount++;
                    if($name[$i] == " ")
                        $spacecount++;
                }
                echo "Vowel count: ".$vcount."<br>"."Space count: ".$spacecount;    
            }
        ?>
    </body>
</html>
