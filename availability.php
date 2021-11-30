<?php
// check connection
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, "sh_signin");

if($conn -> connect_error){
  die("Connected failed" .$conn ->connect_error);
}else{
  echo "connected"."<br>";
}

$retrieve_sql = "SELECT * FROM `locations` WHERE `locations_index` = 1";
$retrieve_send = mysqli_query($conn, $retrieve_sql);
$retrieve_data = mysqli_fetch_assoc($retrieve_send);

$location_name = [];

foreach ($retrieve_data as $location => $ava){
    array_push($location_name, $location);//push name and value to array for each of them
}

$x = 0;
while($x < count($location_name)){  
  if(isset($_POST[$location_name[$x]])){
    $temp_location = $location_name[$x];
    $temp_value = $_POST[$location_name[$x]];
    $sql = "UPDATE `locations` SET `$temp_location` = '$temp_value' WHERE `locations_index` = 1";
    $sql_send = mysqli_query($conn, $sql);
  }
  $x++;
}

?>
