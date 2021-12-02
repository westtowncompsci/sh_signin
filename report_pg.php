<?php
	session_start();
	$status = $_SESSION['status'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Report 11</title>  <!-- basic responsive website, adapted from W3Schools -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="../css/signin.css"> <!--change the css file -->
</head>

<body>




<?php

if ($status == 'teacher') {

require_once './clipboard/central.php';
if ($conn->connect_error) die($conn->connect_error);

?>

<style>
table, th, td {
  border: 1px solid black;
  text-align: left;
}
table {
	width: 100%;
}
a:link {
  color: orange;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: #5f8fb4;
  background-color: transparent;
  text-decoration: none;
}
label {
	font-size: large;
	color: #5f8fb4;
}

input {
	height: 3.5vw;
	width: 20vw;
}


</style>




<!DOCTYPE html> 

<html>

<head>
<style>
		a:hover { text-decoration: underline }
		a:active  { color: rgb(150,0,0); text-decoration: underline }
	</style>
</head>

<body>

<a href="http://localhost:8080/MooseSignIn/reports/reports.php">Return to Reports Dashboard <br><br> </a>

<form id='thedays' method='post' action='./report_pg
.php'>
    <label for="Day">Choose a Day:</label>
    <select name="Day" id="Day" >
    <option value="All">All</option>
	<option value="Today">Today</option>
    <option value="Yesterday">Yesterday</option>
</select>
<br><br>
<input type="submit" value="Submit" form="thedays">
</form>
<p>Click the "Submit" button and the form-data for the selected day will be sent to a page.</p>
</body>
</html>


<?php


require "./scripts/clean_inputs.php";

// this report retrieves the study choices for all student by date selected//

//title of the page
if($_POST['Day']== "All"){
	echo '<h1>All History of Study Locations for All Students</h1>'; //title of the page
} 
else {
	echo '<h1>Study Locations for All Students for '.$_POST['Day']. '</h1>';
}



//or use date(Y-m-d), time()
$today = date('Y-m-d'); 
$yestr = date('Y-m-d', strtotime($today. "-1 days"));

$arr = array('Room / Here', 'Library', 'Arts Center', 'Learning Ctr', 'WCR', 'ECR', 'Teacher@GH', 'Teacher@E3', 'Teacher@BH', 'Off-Campus', 'Team Practice', 'Main Hall', 'Sci Bldg', 'Class Mtg');

$query =  "SELECT choice.*, roster.Dorm_id FROM choice INNER JOIN `roster`";


//Choose a Day, Organized by Location during study hall
if ($_POST["Day"] == "All") {

	foreach ($arr as $value) {
        echo $value;
        $query =  "SELECT choice.*, roster.Dorm_ID FROM choice INNER JOIN `roster` where(choice.location = '$value')";
        $result = $conn->query($query);
        if (!$result) die($conn->error);
        $rows = $result->num_rows;
        echo '<table>';
        echo '<tr><th>Student Name</th><th>Study Hall Period</th><th>Room</th><th>Location</th><th>Day</th><th>Date</th><th>Login Time</th><th>Y-m-d</th></tr>';
        for ($j=0; $j<$rows; ++$j) {
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $current_name = '<tr><td>'.  $row['firstname'] . " " . $row['lastname'] . '</td><td>' . $row['period'] . '</td><td>' . $row['Dorm_ID'] .'</td><td>'. $row['location'] . '</td><td>'. $row['day'] .'</td><td>'. $row['date']. '</td><td>'. $row['choice_timestamp'].'</td><td>'. $row['dateYmd'] . '</td></tr>';
            echo '<p>' . $current_name . '</p>';
            }
        echo '</table> <br>';
    }
}
    elseif ($_POST["Day"]=="Today") { 
	foreach ($arr as $value) {
        echo $value;
        $query =  "SELECT choice.*, roster.Dorm_ID FROM choice INNER JOIN `roster` where(choice.location = '$value' and choice.dateYmd='$today')";
        $result = $conn->query($query);
        if (!$result) die($conn->error);
        $rows = $result->num_rows;
        echo '<table>';
        echo '<tr><th>Student Name</th><th>Study Hall Period</th><th>Room</th><th>Location</th><th>Day</th><th>Date</th><th>Login Time</th><th>Y-m-d</th></tr>';
        for ($j=0; $j<$rows; ++$j) {
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $current_name = '<tr><td>'.  $row['firstname'] . " " . $row['lastname'] . '</td><td>' . $row['period'] . '</td><td>' . $row['Dorm_ID'] .'</td><td>'. $row['location'] . '</td><td>'. $row['day'] .'</td><td>'. $row['date']. '</td><td>'. $row['choice_timestamp'].'</td><td>'. $row['dateYmd'] . '</td></tr>';
            echo '<p>' . $current_name . '</p>';
            }
        echo '</table> <br>';
    }
    
} 
elseif ($_POST["Day"]=="Yesterday") {
    foreach ($arr as $value) {
        echo $value;
        $query =  "SELECT choice.*, roster.Dorm_ID FROM choice INNER JOIN `roster` where(choice.location = '$value' and choice.dateYmd='$yestr')";
        $result = $conn->query($query);
        if (!$result) die($conn->error);
        $rows = $result->num_rows;
        echo '<table>';
        echo '<tr><th>Student Name</th><th>Study Hall Period</th><th>Room</th><th>Location</th><th>Day</th><th>Date</th><th>Login Time</th><th>Y-m-d</th></tr>';
        for ($j=0; $j<$rows; ++$j) {
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $current_name = '<tr><td>'.  $row['firstname'] . " " . $row['lastname'] . '</td><td>' . $row['period'] . '</td><td>' . $row['Dorm_ID'] .'</td><td>'. $row['location'] . '</td><td>'. $row['day'] .'</td><td>'. $row['date']. '</td><td>'. $row['choice_timestamp'].'</td><td>'. $row['dateYmd'] . '</td></tr>';
            echo '<p>' . $current_name . '</p>';
            }
        echo '</table> <br>';
    }
}



$result->close();
$conn->close();

	}
	else {
		echo '<h1>Students may not view this report.</h1>';
	}

include './footer.php';

?>
