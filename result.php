<?php
/*

This code finds the courses a student needs, creates a database, and adds
the student and their courses to the database.

*/

// This will include all of the student's validated information and courses
//include 'project1.php';

// Add all courses student took to an array
$cs201 = $_POST["cs201"];
if (!empty($_POST["cs201"])) {
	$taken[] = $cs201;
}

$cs202 = $_POST["cs202"];
if (!empty($_POST["cs202"])) {
	$taken[] = $cs202;
}


// ........




// Array of required courses
$required = array("cs201","cs202","cs203","cs304","cs313","cs331","cs341","cs411","cs421","cs441","cs447","ma151","ma152","ma221","st355");
$reqlength = count($required);

echo $reqlength;
// Check the required courses for courses the student has not taken
//	and put them in an array of needed courses
/*
for($x=0; $x<$reqlength; $x++){
	if(!in_array($required[$x])){
		$need[] = $required[$x];
	}
}
*/

// Register student for 3 needed courses?


/*
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
VALUES ($studentid, $firstname, $lastname, $email)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Add a student's course (do this 3-4 times)
$sql = "INSERT INTO Student_Courses (studentid, courseid)
VALUES ($studentid, $courseid)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
*/
?>