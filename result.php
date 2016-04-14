<html>
<!--
	This code finds the courses a student needs, creates a database, and adds
the student and their courses to the database.
	-->
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<title>CMSC Course Guide</title>
	<link rel="icon" type="image/ico" href="favicon.ico">
</head>
<body>
<?php

// Retrieve student information
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$sid = $_POST["sid"];

$courseids = array("CMSC-201","CMSC-202","CMSC-203",
	"CMSC-331","CMSC-341","CMSC-313","CMSC-304","CMSC-411","CMSC-421",
	"CMSC-441","CMSC-447","MATH-151","MATH-152","MATH-221","STAT-355",
	"CMSC-345","CMSC-404","CMSC-426","CMSC-427","CMSC-431","CMSC-432",
	"CMSC-433","CMSC-435","CMSC-436","CMSC-437","CMSC-442","CMSC-443",
	"CMSC-444","CMSC-446","CMSC-448","CMSC-451","CMSC-452","CMSC-453",
	"CMSC-455","CMSC-456","CMSC-457","CMSC-461","CMSC-465","CMSC-466",
	"CMSC-471","CMSC-473","CMSC-475","CMSC-476","CMSC-477","CMSC-478",
	"CMSC-479","CMSC-481","CMSC-483","CMSC-484","CMSC-486","CMSC-487",
	"CMSC-491","CMSC-493","CMSC-495","CMSC-498","CMSC-499");

$coursedivids = array("cs201","cs202","cs203","cs304","cs313","cs331",
	"cs341","cs411","cs421","cs441","cs447","ma151","ma152","ma221",
	"st355","cs345","cs404","cs426","cs427","cs431","cs432","cs433",
	"cs435","cs436","cs437","cs442","cs443","cs444","cs446","cs448",
	"cs451","cs452","cs453","cs455","cs456","cs457","cs461","cs465",
	"cs466","cs471","cs473","cs475","cs476","cs477","cs478","cs479",
	"cs481","cs483","cs484","cs486","cs487","cs491","cs493","cs495",
	"cs498","cs499");

$taken = array();
$courselength = count($courseids);

// Add all courses student took to an array
for($x=0; $x<$courselength; $x++){
	if (!empty($_POST[$coursedivids[$x]])) {
		array_push($taken, $courseids[$x]);
	}
}

$required = array("CMSC-201","MATH-151","CMSC-202","CMSC-203","MATH-152",
	"CMSC-331","CMSC-341","CMSC-313","MATH-221", "CMSC-304", "CMSC-411",
	"STAT-355","CMSC-421","CMSC-441", "CMSC-447");
$reqlength = count($required);

// Check the required courses for courses the student has not taken
//	and put them in an array of needed courses
$need = array();
for($x=0; $x<$reqlength; $x++){
	if(!in_array($required[$x], $taken)){
		array_push($need, $required[$x]);
	}
}

// Determine how many 400 level electives still needed
$upperLevels = 5;
$needlength = count($need);
for($x=0; $x<$needlength; $x++){
	if(strpos($need[$x], "CMSC-4")){
		$upperLevels--;
	}
}

// Add electives to needed courses
for($x=0; $x<$upperLevels; $x++){
	array_push($need, "CMSC-4XX");
}

// Print out table of needed courses
$needlength = count($need);
echo '<table id="table2">';
echo '<tr>';
echo '<th id="t1">Courses Needed</th>';
echo '</tr>';

for($x=0; $x<$needlength; $x++){
	echo '<tr>';
	echo '<td id="t1">';
	echo $need[$x];
	echo "</td>";
	echo "</tr>";
}
echo '</table>';

?>

<br>
<div id="classSection">Note: Any course labeled CMSC-4XX is any 400 level elective for Computer Science</div>

<?php
// Database code

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
    die(); // Removed error text to hide it from users
} 

// Add student to the table
$sql = "INSERT INTO Students (studentid, firstname, lastname, email)
VALUES ('$sid', '$fname', '$lname', '$email')";

if ($conn->query($sql) === TRUE) {
    //echo "New student created successfully<br><br>";
    // Removed success text to hide it from users
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    // Removed error text to hide it from users
}

// Add all of student's courses taken
$takenlength = count($taken);
for($i=0; $i<$takenlength; $i++){
	$sql = "INSERT INTO Student_Courses (studentid, courseid) VALUES ('$sid', '$taken[$i]')";

	if ($conn->query($sql) === TRUE) {
    	//echo "Student's course created successfully<br><br>";
    	// Removed success text to hide it from users
	}
	else {
    	//echo "Error: " . $sql . "<br>" . $conn->error;
    	// Removed error text to hide it from users
	}
}

$conn->close();
?>
</body>
</html>