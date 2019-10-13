<!DOCTYPE html>
<html>
    <head>
        <style>
            *, *::before, *::after{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            html, body{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                font: 400 15px/1.9 "Lato", sans-serif;
            }
            form{
                display: inline-block;
                padding: 2vmin;
                background: #7c03a5;
                border-radius: 10px;
            }
            input, select{
                text-align: center;
                display: block;
                margin: 1.5vmin 0;
                width: 100%;
                font-weight: 600;
            }
            input[type = submit]{
                border: none;
                outline: none;
                margin-top: 2.5vmin;
                border-radius: 10px;
                background: #ddd;
                padding: 1vmin;
            }
        </style>
    </head>
    <body>
        <form method = "post">
            <input type = "textbox" placeholder = "Some text here"/>
            <select>
                <option value = "male">Male</option>
                <option value = "female">Female</option>
            </select>
            <input type = "submit" value = "Fill out"/>
        </form>
    </body>
</html>