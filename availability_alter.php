<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, "sh_signin");

//check connection
if ($conn -> connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "connected successfully" . "<br>";
}

//get location name
$retrieve_sql = "SELECT * FROM `locations` WHERE `locations_index` = 1";
$retrieve_send = mysqli_query($conn, $retrieve_sql);
$retrieve_data = mysqli_fetch_assoc($retrieve_send);

//declare location name and availability array
$location_name = [];

foreach ($retrieve_data as $location => $ava){
    array_push($location_name, $location);//push name and value to array for each of them
}


//echo input statements
$x = 0;

while ($x < count($location_name)){
    echo "<label for = '$location_name[$x]'>Set $location_name[$x] availability</label><br>";
    echo "<input type = 'radio' name = '$location_name[$x]' value = '0'>";
    echo "<label for = '$location_name[$x]'>Set Available</label>";
    echo "<input type = 'radio' name = '$location_name[$x]' value = '1'>";
    echo "<label for = '$location_name[$x]'>Set Unavailable</label>";
    echo "<input type = 'radio' name = '$location_name[$x]' value = '2'>";
    echo "<label for = '$location_name[$x]'>First half only</label>";
    echo "<input type = 'radio' name = '$location_name[$x]' value = '3'>";
    echo "<label for = '$location_name[$x]'>Second half only</label>";
    echo "<br><br>";
    $x++;
}


?>