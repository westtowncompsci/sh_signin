<?php
	session_start();
	
	$_SESSION['half1'] = $_POST['half1'];
	$_SESSION['half2'] = $_POST['half2'];
?>

<!DOCTYPE html>
<html>

<head>
    <script src="lib/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<div style=background-color:#7499c1 class="confirm">
        <h1> Your choices are:</h1>

        <div class="confirm-group">
            <div class="button blank-button">
                <div class="button-text edit-text">
                    <?php echo $_POST["half1"]; ?>
                </div>
            </div>
            <div class="button blank-button">
                <div class="button-text">
                    <?php echo $_POST["half2"]; ?>
                </div>
            </div>
        </div>
        <div class="confirm-group">
            <a class="button edit-button" href="half1.php">
                <div class="button-text">Edit</div>
            </a>
            <form method="post" action="send.php">
                 <input class="button confirm-button" type="submit" value="Confirm">
            </form>
        </div>

</body>
</html>