<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, "sh_signin");

    //include 'login_info.php';

    if ($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "connected successfully" . "<br>";
    }

    $cookie_value = rand();
    $pw = $_SESSION['pw'];
    $email = $_SESSION['email'];

    $sql = "UPDATE `sign_in` 
        SET `credential` = '$cookie_value' 
        WHERE `passwords` = '$pw' and `email` = '$email'";
    $send = mysqli_query($conn, $sql);

    setcookie($pw, $cookie_value, time() + (3600), '/');

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

    //user 
    $student_type_sql = "SELECT `student_type`, `Dorm_ID`
                    FROM `roster` 
                    WHERE `first_name` = '$fname' and `last_name` = '$lname'";
    $student_type_send = mysqli_query($conn, $student_type_sql);
    $student_type_result = mysqli_fetch_assoc($student_type_send);

    $_SESSION['id'] = $student_type_result['Dorm_ID'];
    
    //direct user to page based on user type
    if($student_type_result['student_type'] >= 2){
        header("Location: teacher_page.php");
    }else{
        header("Location: submit_form.php");
    }
?>