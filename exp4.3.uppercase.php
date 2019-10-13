<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type ="text/css" href="lab.css">
    </head>
    <body>
        <form method = "post">
            <input type = "text" name = "name" placeholder = "Full name*" required/>
            <select name = "gender">
                <option value = "">Gender...</option>
                <option value = "Mr.">Male</option>
                <option value = "Mrs.">Female</option>
                <option value = "Mr." >Don't want to share</option>
            </select>
            <input type = "submit" name = "submit" value="Submit"/>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                
                if($_POST['gender'] == "")
                    echo "<br><b>NO gender input!!!</b>";
                else{
                    echo "<br>Name Entered by you  : " . ($_POST['gender']) . " " . ($name);
                    echo "<br><br><br>Your name in UPPER CASE  : " . strtoupper($_POST['gender']) . " " . strtoupper($name);
                }
            }
        ?>
    </body>

<html>