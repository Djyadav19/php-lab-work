<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "lab.css"/>
    </head>
    <body>
        <form method = "post">
            <select name = "course" required>
                <option value = "">*Select Course</option>
                <option value = "1540000">OSS</option>
                <option value = "1605000">CCVT</option>
                <option value = "1579000">CSF</option>
            </select>

            <select name = "travel" required>
                <option value = "">Select Travel Method</option>
                <option value = "0">None</option>
                <option value = "7000">College Bus</option>
                <option value = "12000">Private Van</option>
            </select>

            <select name = "hostel" required>
                <option value = "">Select Hostel Room Type</option>
                <option value = "0">None</option>
                <option value = "175000">Single Share Bed Room</option>
                <option value = "150000">Double Share Bed Room</option>
                <option value = "125000">Triple Share Bed Room</option>
            </select>
            
            <input type = "checkbox" id = "mess" name = "mess"/>
            <label for = "mess">Opt for College Mess?</label>

            </select>

            <input type = "submit" name = "submit"/>
        </form>
        <?php
            error_reporting(E_ERROR | E_PARSE);
            $lib = 5000;
            $id = 500;
            $exam = 3000;
            $mess = 0;
            if(isset($_POST['submit'])){
                if(isset($_POST['mess'])){
                    $mess = 5500;
                }
                $course = (int)$_POST['course'];
                echo "Total Fee : " . ($course + $lib + $id + $exam + (int)$_POST['hostel'] + $mess + (int)$_POST['travel']);
            }
        ?>
    </body>
</html>