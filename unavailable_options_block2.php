<?php
//see unavailable_options_block1.php for annotation (same thing except final for loop)
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

$retrieve_sql = "SELECT * FROM `locations` WHERE `locations_index` = 1";
$retrieve_send = mysqli_query($conn, $retrieve_sql);
$retrieve_data = mysqli_fetch_assoc($retrieve_send);

$location_name = [];
$location_ava = [];

foreach ($retrieve_data as $location => $ava){
    array_push($location_name, $location);
    array_push($location_ava, $ava);
}

$value_sql = "SELECT * FROM `locations` WHERE `locations_index` = 2";
$value_send = mysqli_query($conn, $value_sql);
$value_data = mysqli_fetch_assoc($value_send);


$location_value = [];

foreach($value_data as $name => $value){
    array_push($location_value, $value);
}

for ($i = 0; $i < count($location_name); $i++){
    if($location_ava[$i] == 0){
        echo "<input type = 'radio' name = 'location2' value = '$location_value[$i]'>";
        echo "<label for = 'location2'>$location_name[$i]</label>";
    }else if ($location_ava[$i] == 3){//value of 3, available only in block 2
        echo "<input type = 'radio' name = 'location2' value = '$location_value[$i]'>";
        echo "<label for = 'location2'>$location_name[$i]</label>";
    }
}


?>