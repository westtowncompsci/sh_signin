<?php
    session_start();

    //connect
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, "sh_signin");

    if ($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "connected successfully" . "<br>";
    }

    //make email and pw accessible across files
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $_SESSION['email'] = $email;
    $_SESSION['pw'] = $pw;

    //get info from signin and check with it below
    $check_sql = "SELECT * FROM `sign_in` 
        WHERE `email` = '$email'";
    $check_send = mysqli_query($conn, $check_sql);

    $result = mysqli_fetch_assoc($check_send);
    $em_result = $result['email'];
    $pw_result = $result['passwords'];
    
    $_SESSION['fname'] = $result['first_name'];
    $_SESSION['lname'] = $result['last_name'];


    //check if password entered are correct
    if ($em_result === $email && $pw_result === $pw){
        header('Location: login_cookie.php');
        
    }else{
        header('Location: login_form.php');
        //allow login_form to know that the password entered was wrong
        setcookie("test", 1, time() + (3), '/');
    }

?>