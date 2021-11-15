<?php
    //check if password is entered wrong
    $cookie_name = array_key_last($_COOKIE);
    if ($cookie_name === "test"){
        echo "password wrong, try again";
    }
?>

<!DOCTYPE html>

<htmL>

<head>
    <title>Login to Studyhall</title>
</head>

<body>
    <form method = "post" action = 'login_validate.php'>
        <input type = "text" name = "email">
            <label for = "email">email: </label><br>
        <input type = "text" name = "password" id>
            <label for = "password">password: </label></br>
        <input type = submit value = submit>
    </form>
<?php




?>

<body>

</html>