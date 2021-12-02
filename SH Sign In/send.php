<?php
	session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <script src="lib/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<div style=background-color:#7499c1 class="confirm">
        <div> <?php echo $_SESSION["half1"]; ?> </div>
        <div> <?php echo $_SESSION["half2"]; ?> </div>
        <div> Hi </div>
</body>
</html>