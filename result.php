<html>
<!--
	This code finds the courses a student needs, creates a database, and adds
the student and their courses to the database.

	-->
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<title>CMSC Course Guide</title>
</head>
<body>
<?php

// Retrieve student information
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$sid = $_POST["sid"];

// Add all courses student took to an array
$taken = array();

if (!empty($_POST["cs201"])) {
	array_push($taken, "CMSC-201");
}
if (!empty($_POST["cs202"])) {
	array_push($taken, "CMSC-202");
}
if (!empty($_POST["cs203"])) {
	array_push($taken, "CMSC-203");
}
if (!empty($_POST["cs304"])) {
	array_push($taken, "CMSC-304");
}
if (!empty($_POST["cs313"])) {
	array_push($taken, "CMSC-313");
}
if (!empty($_POST["cs331"])) {
	array_push($taken, "CMSC-331");
}
if (!empty($_POST["cs341"])) {
	array_push($taken, "CMSC-341");
}
if (!empty($_POST["cs411"])) {
	array_push($taken, "CMSC-411");
}
if (!empty($_POST["cs421"])) {
	array_push($taken, "CMSC-421");
}
if (!empty($_POST["cs441"])) {
	array_push($taken, "CMSC-441");
}
if (!empty($_POST["cs447"])) {
	array_push($taken, "CMSC-447");
}
if (!empty($_POST["ma151"])) {
	array_push($taken, "MATH-151");
}
if (!empty($_POST["ma152"])) {
	array_push($taken, "MATH-152");
}
if (!empty($_POST["ma221"])) {
	array_push($taken, "MATH-221");
}
if (!empty($_POST["st355"])) {
	array_push($taken, "STAT-355");
}

//Electives
if (!empty($_POST["cs345"])) {
	array_push($taken, "CMSC-345");
}
if (!empty($_POST["cs404"])) {
	array_push($taken, "CMSC-404");
}
if (!empty($_POST["cs426"])) {
	array_push($taken, "CMSC-426");
}
if (!empty($_POST["cs427"])) {
	array_push($taken, "CMSC-427");
}
if (!empty($_POST["cs431"])) {
	array_push($taken, "CMSC-431");
}
if (!empty($_POST["cs432"])) {
	array_push($taken, "CMSC-432");
}
if (!empty($_POST["cs433"])) {
	array_push($taken, "CMSC-433");
}
if (!empty($_POST["cs435"])) {
	array_push($taken, "CMSC-435");
}
if (!empty($_POST["cs436"])) {
	array_push($taken, "CMSC-436");
}
if (!empty($_POST["cs437"])) {
	array_push($taken, "CMSC-437");
}
if (!empty($_POST["cs442"])) {
	array_push($taken, "CMSC-442");
}
if (!empty($_POST["cs443"])) {
	array_push($taken, "CMSC-443");
}
if (!empty($_POST["cs444"])) {
	array_push($taken, "CMSC-444");
}
if (!empty($_POST["cs446"])) {
	array_push($taken, "CMSC-446");
}
if (!empty($_POST["cs448"])) {
	array_push($taken, "CMSC-448");
}
if (!empty($_POST["cs451"])) {
	array_push($taken, "CMSC-451");
}
if (!empty($_POST["cs452"])) {
	array_push($taken, "CMSC-452");
}
if (!empty($_POST["cs453"])) {
	array_push($taken, "CMSC-453");
}
if (!empty($_POST["cs455"])) {
	array_push($taken, "CMSC-455");
}
if (!empty($_POST["cs456"])) {
	array_push($taken, "CMSC-456");
}
if (!empty($_POST["cs457"])) {
	array_push($taken, "CMSC-457");
}
if (!empty($_POST["cs461"])) {
	array_push($taken, "CMSC-461");
}
if (!empty($_POST["cs465"])) {
	array_push($taken, "CMSC-465");
}
if (!empty($_POST["cs466"])) {
	array_push($taken, "CMSC-466");
}
if (!empty($_POST["cs471"])) {
	array_push($taken, "CMSC-471");
}
if (!empty($_POST["cs473"])) {
	array_push($taken, "CMSC-473");
}
if (!empty($_POST["cs475"])) {
	array_push($taken, "CMSC-475");
}
if (!empty($_POST["cs476"])) {
	array_push($taken, "CMSC-476");
}
if (!empty($_POST["cs477"])) {
	array_push($taken, "CMSC-477");
}
if (!empty($_POST["cs478"])) {
	array_push($taken, "CMSC-478");
}
if (!empty($_POST["cs479"])) {
	array_push($taken, "CMSC-479");
}
if (!empty($_POST["cs481"])) {
	array_push($taken, "CMSC-481");
}
if (!empty($_POST["cs483"])) {
	array_push($taken, "CMSC-483");
}
if (!empty($_POST["cs484"])) {
	array_push($taken, "CMSC-484");
}
if (!empty($_POST["cs486"])) {
	array_push($taken, "CMSC-486");
}
if (!empty($_POST["cs487"])) {
	array_push($taken, "CMSC-487");
}
if (!empty($_POST["cs491"])) {
	array_push($taken, "CMSC-491");
}
if (!empty($_POST["cs493"])) {
	array_push($taken, "CMSC-493");
}
if (!empty($_POST["cs495"])) {
	array_push($taken, "CMSC-495");
}
if (!empty($_POST["cs498"])) {
	array_push($taken, "CMSC-498");
}
if (!empty($_POST["cs499"])) {
	array_push($taken, "CMSC-499");
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

// Determine how many 400 level electives needed
$upperLevels = 5;
$needlength = count($need);
for($x=0; $x<$needlength; $x++){
	if(strpos($need[$x], "CMSC-4")){
		$upperLevels--;
	}
}

// Add necessary electives
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


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// Add student to the table
$sql = "INSERT INTO Students (studentid, firstname, lastname, email)
VALUES ('$sid', '$fname', '$lname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New student created successfully<br><br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Add all of student's courses
$takenlength = count($taken);
for($i=0; $i<$takenlength; $i++){
	$sql = "INSERT INTO Student_Courses (studentid, courseid) VALUES ('$sid', '$taken[$i]')";

	if ($conn->query($sql) === TRUE) {
    	echo "Student's course created successfully<br><br>";
	}
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>
</body>
</html>