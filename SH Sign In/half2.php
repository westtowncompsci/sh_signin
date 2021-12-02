<!DOCTYPE html>
<html>

<head>
    <script src="lib/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <div style=background-color:#7499c1 class="half2">
        <h1> Select second half location: </h1>

        <form class="half2-group" method="post" action="confirm.php">
            <input type="hidden" name="half1" value="<?php echo $_POST["half1"]; ?>">
            <input class="button button-special" type="submit" name="half2" value="Dorm">
            <input class="button" type="submit" name="half2" value="Library">
            <input class="button" type="submit" name="half2" value="Arts Center">
            <input class="button teacher-button" type="submit" name="half2" value="Teacher on Dorm">
            <input class="button" type="submit" name="half2" value="Science Class">
            <input class="button" type="submit" name="half2" value="Health Center">
            <input class="button" type="submit" name="half2" value="Senior Seminar">
            <input class="button" type="submit" name="half2" value="Away Game">
            <input class="button" type="submit" name="half2" value="Team Practice">
            <input class="button" type="submit" name="half2" value="Off Campus">
            <input class="button" type="submit" name="half2" value="Proctor/Prefect">
        </form>
    </div>

</body>
</html>