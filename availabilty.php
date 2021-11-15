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

/*
$ava = array($_POST['available']);
*/

//user input (varibale for the update)
$room_ava = $_POST['available'];
$library_ava = $_POST['available'];
$gH_ava = $_POST['available'];
$e3_ava = $_POST['available'];
$e2_ava = $_POST['available'];
$bH_ava = $_POST['available'];
$w2_ava = $_POST['available'];
$w3_ava = $_POST['available'];
$da_ava = $_POST['available'];
$chorus_ava = $_POST['available'];
$musicp_ava = $_POST['available'];
$art_ava = $_POST['available'];
$clay_ava = $_POST['available'];
$band_ava = $_POST['available'];
$strings_ava = $_POST['available'];
$theater_ava = $_POST['available'];
$offcampus_ava = $_POST['available'];
$ECR_ava = $_POST['available'];
$WCR_ava = $_POST['available'];
$MH109_ava = $_POST['available'];
$MH110_ava = $_POST['available'];
$MH111_ava = $_POST['available'];
$southroom_ava = $_POST['available'];
$MH123_ava = $_POST['available'];
$MH124_ava = $_POST['available'];
$MH125_ava = $_POST['available'];
$MH126_ava = $_POST['available'];
$MH127_ava = $_POST['available'];
$MH128_ava = $_POST['available'];
$MH132_ava = $_POST['available'];
$DSL_ava = $_POST['available'];
$sci_ctr_ava = $_POST['available'];
$practice_ava = $_POST['available'];
$game_ava = $_POST['available'];
$class_ava = $_POST['available'];
$health_center_ava = $_POST['available'];
$other_ava = $_POST['available'];

$ava = [];
$ava['room']; $ava[1];p

//sqls
$sql1 = "UPDATE `locations` SET `room` = '$room_ava', `library` = '$library_ava', `gH` = '$gH_ava', `e3` = '$e3_ava', `e2` = '$e2_ava', `bH` = '$bH_ava', WHERE `loccations_index` = 1";
$sql2 = "UPDATE `locations` SET `w2` = '$w2_ava', `w3` = '$w3_ava', `da_office` = '$da_ava', `chorus_room` = '$chorus_ava', `musicp_rooms` = '$musicp_ava', `art_room` = '$art_ava', WHERE `loccations_index` = 1";
$sql3 = "UPDATE `locations` SET `clay_room` = '$clay_ava', `band_room` = '$band_ava', `strings_room` = '$strings_ava', `theater` = '$theater_ava', `off_campus` = '$offcampus_ava', `ECR` = '$ECR_ava', WHERE `loccations_index` = 1";
$sql4 = "UPDATE `locations` SET `WCR` = '$WCR_ava', `MH109` = '$MH109_ava', `MH110` = '$MH110_ava', `MH111` = '$MH111_ava', `south_room` = '$southroom_ava', `MH123` = '$MH123_ava', WHERE `loccations_index` = 1";
$sql5 = "UPDATE `locations` SET `MH124` = '$MH124_ava', `MH125` = '$MH125_ava', `MH126` = '$MH126_ava', `MH127` = '$MH127_ava', `MH128` = '$MH128_ava', `MH132` = '$MH132_ava', WHERE `loccations_index` = 1";
$sql6 = "UPDATE `locations` SET `DSL` = '$DSL_ava', `sci_ctr` = '$sci_ctr_ava', `practice` = '$practice_ava', `game` = '$game_ava', `class` = '$class_ava', `health_center` = '$health_center_ava', WHERE `loccations_index` = 1";
$sql7 = "UPDATE `locations` SET `other` = '$other_ava', WHERE `loccations_index` = 1";

//send to database
$send1 = mysqli_query($conn, $sql1, $sql2, $sql3, $sql4, $sql5, $sql6, $sql7);

if ($send1){
  echo "sumbission successful";
}else{
  echo "failed";
}


?>
