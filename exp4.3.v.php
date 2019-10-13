<!DOCTYPE html>
<html>
    <head>
        <link rel= "stylesheet" href= "lab.css"/>
    </head>
    <body>
        <form method = "post">
            <input type = "text" name = "text" placeholder = "String***"/>
            <input type = "submit" name = "submit" value = "Check the string"/>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['text'];
                for($i = 0; $i<strlen($name); $i++){
                    if(($name[$i]>='A' && $name[$i]<='Z') || ($name[$i]>='a' && $name[$i]<='z') || $name[$i]==' ');
                    else{
                        echo "String contains other than characters: ";
                        goto hell;
                    }
                }
                echo "Character only";
                hell:
            }
        ?>
    </body>

</html>