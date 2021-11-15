<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, "sh_signin");
        
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
    echo "Connected successfully" . "<br>";

    //user information
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $room = $_SESSION['id'];

    //user inputs
    $location_1 = $_POST["location1"];
    $location_2 = $_POST["location2"];

    //date and time
    date_default_timezone_set("America/New_York");
    $time = time();
    $wday = date("l", $time);
    $date = date("Y-m-d H:i:s", $time);

    //sqls 
    $sql1 = "INSERT INTO `sh_data`(`firstname`, `lastname`, `room`, `location`, `period`, `wday`, `time`) 
    VALUES ('$fname','$lname','$room','$location_1','1st','$wday','$date')";
    $sql2 = "INSERT INTO `sh_data`(`firstname`, `lastname`, `room`, `location`, `period`, `wday`, `time`) 
    VALUES ('$fname','$lname','$room','$location_2','2st','$wday','$date')";

    //send to database
    $send1 = mysqli_query($conn, $sql1);
    $send2 = mysqli_query($conn, $sql2);

    //validate
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if ($send1 && $send2){
            echo "submission successful";
        }else{
            echo "failed";
        }
    }else{
        echo "not yet submitted";
    }

?>