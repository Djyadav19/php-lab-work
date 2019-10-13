<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href="lab.css"/>
    </head>
    <body>
        <form method = "post">
            <h2> Enter 'n' no of Data for 'n' user seperated by space: </h2>
            <input type = "text" name = "name" placeholder = "name"/>
            <input type = "text" name = "email" placeholder = "email"/>
            <input type = "text" name = "contact" placeholder = "Contact No."/>
            <input type = "submit" name = "submit" value ="submit"/>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $name = explode(' ', $_POST['name']);
                $email = explode(' ', $_POST['email']);
                $contact = explode(' ', $_POST['contact']);
                $a = array($name, $email, $contact);
                foreach($a as $x)
                    foreach($x as $y)
                        echo $y . " ";
            }
        ?>
    </body>

</html>