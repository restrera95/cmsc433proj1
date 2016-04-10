<?php

// This will include all of the student's validated information and courses
include 'project1.php';

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
?>