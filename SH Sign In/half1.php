<?php
	session_start();
	
	$_SESSION['firstname'] = $_POST['firstname'];
	$_SESSION['lastname'] = $_POST['lastname'];
?>

<!DOCTYPE html>
<html>

<head>
    <script src="lib/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div style=background-color:#7499c1 class="half1">
        <h1> Select first half location: </h1>

        <form class="half1-group" method="post" action="half2.php">
            <input class="button button-special" type="submit" name="half1" value="Dorm">
            <input class="button" type="submit" name="half1" value="Library">
            <input class="button" type="submit" name="half1" value="Arts Center">
            <input class="button teacher-button" type="submit" name="half1" value="Teacher on Dorm">
            <input class="button" type="submit" name="half1" value="Science Class">
            <input class="button" type="submit" name="half1" value="Health Center">
            <input class="button" type="submit" name="half1" value="Senior Seminar">
            <input class="button" type="submit" name="half1" value="Away Game">
            <input class="button" type="submit" name="half1" value="Team Practice">
            <input class="button" type="submit" name="half1" value="Off Campus">
            <input class="button" type="submit" name="half1" value="Proctor/Prefect">
        </form>
    </div>

</body>
</html>