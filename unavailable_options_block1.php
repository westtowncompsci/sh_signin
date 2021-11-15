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

//get location name and availability
$retrieve_sql = "SELECT * FROM `locations` WHERE `locations_index` = 1";
$retrieve_send = mysqli_query($conn, $retrieve_sql);
$retrieve_data = mysqli_fetch_assoc($retrieve_send);

//declare location name and availability array
$location_name = [];
$location_ava = [];

foreach ($retrieve_data as $location => $ava){
    array_push($location_name, $location);//push name and value to array for each of them
    array_push($location_ava, $ava);
}

//get value from database
$value_sql = "SELECT * FROM `locations` WHERE `locations_index` = 2";
$value_send = mysqli_query($conn, $value_sql);
$value_data = mysqli_fetch_assoc($value_send);

//declare location value array (for submit)
$location_value = [];

//push values to array
foreach($value_data as $name => $value){
    array_push($location_value, $value);
}

//depending on value, it will echo different input choices for form
for ($i = 0; $i < count($location_name); $i++){
    if($location_ava[$i] == 0){
        echo "<input type = 'radio' name = 'location1' value = '$location_value[$i]'>";
        echo "<label for = 'location1'>$location_name[$i]</label>";
    }else if ($location_ava[$i] == 2){//value of 2, available only in block 1
        echo "<input type = 'radio' name = 'location1' value = '$location_value[$i]'>";
        echo "<label for = 'location1'>$location_name[$i]</label>";
    }
}


?>