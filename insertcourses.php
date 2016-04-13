<?php
/*
This file will insert all courses and add them to the database.
Only needs to be run once.
*/

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

// Add courses to the table
$courseids = array("CMSC-201","MATH-151","CMSC-202","CMSC-203","MATH-152",
	"CMSC-331","CMSC-341","CMSC-313","MATH-221","CMSC-304","CMSC-411",
	"STAT-355","CMSC-421","CMSC-441","CMSC-447","CMSC-345","CMSC-404",
	"CMSC-426","CMSC-427","CMSC-431","CMSC-432","CMSC-433","CMSC-435",
	"CMSC-436","CMSC-437","CMSC-442","CMSC-443","CMSC-444","CMSC-446",
	"CMSC-448","CMSC-451","CMSC-452","CMSC-453","CMSC-455","CMSC-456",
	"CMSC-457","CMSC-461","CMSC-465","CMSC-466","CMSC-471","CMSC-473",
	"CMSC-475","CMSC-476","CMSC-477","CMSC-478","CMSC-479","CMSC-481",
	"CMSC-483","CMSC-484","CMSC-486","CMSC-487","CMSC-491","CMSC-493",
	"CMSC-495","CMSC-498","CMSC-499");

foreach($courseids as $class){
	$sql = "INSERT INTO Courses (courseid) VALUES ('$class')";

	if ($conn->query($sql) === TRUE) {
   	 echo "New course $class created successfully <br>";
	} else {
   	 echo "<br>Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>