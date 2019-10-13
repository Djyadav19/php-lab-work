<!DOCTYPE html>
<html>
    <head>
       
       <style>
            *, *::before, *::after{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body, html{
                font: 400 15px/1.9 "Lato", sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: linear-gradient(to top, #021C1E, #004445);
                color: #ddd;
                flex-direction: column;
            }
            input{
                display : block;
                width: 100%;
                height: 5vh;
                margin: 1vmin 0;
                color: #333;
            }
            form{
                background: #2C7873;
                padding: 5vmin;
                border-radius: 10px;
                box-shadow:  0 0 80px #07acb4;
            }
            table, td, th, tr{
                border: 1px solid #333;
                padding: 1vmin;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <form method = "post">
            <input type = "text" name = "name" placeholder = "Student's name"/>
            <input type = "number" name = "roll" placholder = "Roll No."/>
            <table>
                <tr>
                    <th colspan = "2">Subjects</th>
                    <th>Marks</th>
                </tr>
                <tr>
                    <th colspan = "2">Maths</th>
                    <td><input type = "number" name = "maths"/></th>
                </tr>
                <tr>
                    <th colspan = "2">Science</th>
                    <td><input type = "number" name = "science"/></th>
                </tr>
                <tr>
                    <th colspan = "2">English</th>
                    <td><input type = "number" name = "english"/></th>
                </tr>
                <tr>
                    <th colspan = "2">Language</th>
                    <td><input type = "number" name = "lang"/></th>
                </tr>
                <tr>
                    <th colspan = "2">Moral science</th>
                    <td><input type = "number" name = "moral"/></th>
                </tr>
                <tr><th colspan = "3"><input type = "submit" name = "submit"/></th></tr>
            </table>
        </form>
        <?php
            function find_grade($marks){
                return ($marks>90)?'o':(($marks>70)?'a':(($marks>60)?'b':(($marks>50)?'c':'f')));
            }
            if(isset($_POST['submit'])){
                $total = $_POST['maths'] + $_POST['science'] + $_POST['english'] + 
                         $_POST['lang'] + $_POST['moral'];
                echo "Total : " . $total . "<br>Average : " . $total/5 . "<br>Grade : " . find_grade($total/5);              
            }
        ?>
    </body>
</html>