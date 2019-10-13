<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type ="text/css" href="lab.css">
    </head>
    <body>
        <form method = "post">
            <input type = "text" name = "fullname" placeholder = "Full name*" required/>
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
                $arr = explode(' ',$_POST['fullname']);
                echo "First Name : " . $arr[0];
                echo "<br>Middle Name : " . $arr[1];
                echo "<br>Last Name : " . $arr[2];
                if($_POST['gender'] == "")
                    echo "<br><b>NO gender input!!!</b>";
                else
                    echo "<br>Concatenated Data : " . $_POST['gender'] . " " . $arr[0] . " ". $arr[2];
            }
        ?>
    </body>

<html>