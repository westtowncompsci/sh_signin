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
        
    <?php
        include 'unavailable_options_block1.php';
    ?>

        <p>Submit the places you want for studyhall period 2</p>
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

        <?php
            include 'unavailable_options_block2.php';
        ?>
        
        <br>
        <input type = "submit" name ="submit" value = "submit">

    </form>

    
</body>
</html>

