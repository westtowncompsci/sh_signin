<?php 

?>

<!DOCTYPE HTML>

<html>
<head>
    <title>Studyhall Locations</title>
</head>

<body>
    <form method = "post" action = "result_form.php">
        <p>Submit the places you want for studyhall period 1</p><br>
        <input type = "radio" name = "location1" value = "00">
            <label for = "location1">Dorm</label>

        <input type = "radio" name = "location1" value = "01">
            <label for = "location1">Library</label>

        <input type = "radio" name = "location1" value = "02">
            <label for = "location1">Guester House</label>

        <input type = "radio" name = "location1" value = "03">
            <label for = "location1">E3</label>

        <input type = "radio" name = "location1" value = "04">
            <label for = "location1">E2</label>

        <input type = "radio" name = "location1" value = "05">
            <label for = "location1">Balderston</label>

        <input type = "radio" name = "location1" value = "06">
            <label for = "location1">W3</label>

        <input type = "radio" name = "location1" value = "07">
            <label for = "location1">W2</label>

        <input type = "radio" name = "location1" value = "09">
            <label for = "location1">Chorus Room</label>

        <input type = "radio" name = "location1" value = "10">
            <label for = "location1">Music Practice Room</label>

        <input type = "radio" name = "location1" value = "11">
            <label for = "location1">Art Room</label>

        <input type = "radio" name = "location1" value = "12">
            <label for = "location1">Clay Room</label><br>

        <input type = "radio" name = "location1" value = "13">
            <label for = "location1">Band Room</label>

        <input type = "radio" name = "location1" value = "14">
            <label for = "location1">Strings Room</label>

        <input type = "radio" name = "location1" value = "15">
            <label for = "location1">Theater</label>

        <input type = "radio" name = "location1" value = "16">
            <label for = "location1">Off Campus</label>
        
        <input type = "radio" name = "location1" value = "32">
            <label for = "location1">Practice</label>

        <input type = "radio" name = "location1" value = "33">
            <label for = "location1">Game</label><br>

        <input type = "radio" name = "location1" value = "34">
            <label for = "location1">Class</label>

        <input type = "radio" name = "location1" value = "35">
            <label for = "location1">Health</label>

        <input type = "radio" name = "location1" value = "36">
            <label for = "location1">Other</label>
        
    <?php
        /*if (//dean permission (data base)){
            echo "<br>" . "Locations with Dean's permission" . "<br>";
            include 'unavailable_options_block1.php';
        }else{
            echo "<br>" . "ask dean to show hidden";
        }*/
    ?>

        <p>Submit the places you want for studyhall period 2</p><br>
        <input type = "radio" name = "location2" value = "00">
            <label for = "location2">Dorm</label>

        <input type = "radio" name = "location2" value = "01">
            <label for = "location2">Library</label>

        <input type = "radio" name = "location2" value = "02">
            <label for = "location2">Guester House</label>

        <input type = "radio" name = "location2" value = "03">
            <label for = "location2">E3</label>

        <input type = "radio" name = "location2" value = "04">
            <label for = "location2">E2</label>

        <input type = "radio" name = "location2" value = "05">
            <label for = "location2">Balderston</label>

        <input type = "radio" name = "location2" value = "06">
            <label for = "location2">W3</label>

        <input type = "radio" name = "location2" value = "07">
            <label for = "location2">W2</label>

        <input type = "radio" name = "location2" value = "09">
            <label for = "location2">Chorus Room</label>

        <input type = "radio" name = "location2" value = "10">
            <label for = "location2">Music Practice Room</label>

        <input type = "radio" name = "location2" value = "11">
            <label for = "location2">Art Room</label>

        <input type = "radio" name = "location2" value = "12">
            <label for = "location2">Clay Room</label><br>

        <input type = "radio" name = "location2" value = "13">
            <label for = "location2">Band Room</label>

        <input type = "radio" name = "location2" value = "14">
            <label for = "location2">Strings Room</label>

        <input type = "radio" name = "location2" value = "15">
            <label for = "location2">Theater</label>

        <input type = "radio" name = "location2" value = "16">
            <label for = "location2">Off Campus</label>
        
        <input type = "radio" name = "location2" value = "32">
            <label for = "location2">Practice</label>

        <input type = "radio" name = "location2" value = "33">
            <label for = "location2">Game</label><br>

        <input type = "radio" name = "location2" value = "34">
            <label for = "location2">Class</label>

        <input type = "radio" name = "location2" value = "35">
            <label for = "location2">Health</label>

        <input type = "radio" name = "location2" value = "36">
            <label for = "location2">Other</label>


        <br>
        <input type = "submit" name ="submit" value = "submit">

        <?php
            /*if ($_SESSION['show'] === true){
                echo "<br>" . "Locations with Dean's permission" . "<br>";
                include 'unavailable_options_block2.php';
            }else{
                echo "<br>" . "ask dean to show hidden";
            }*/
        ?>
        
    </form>

    
</body>
</html>

