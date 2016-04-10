<?php
/*
This file creates the tables for Project 1.
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

// sql to create Students table
$sql = "CREATE TABLE Students (
studentid VARCHAR(7) UNSIGNED PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30),
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Students created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


// sql to create Courses table
$sql = "CREATE TABLE Courses (
courseid VARCHAR(8) UNSIGNED PRIMARY KEY,
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Courses created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


// sql to create Student_Courses table
$sql = "CREATE TABLE Student_Courses (
studentid VARCHAR(7) UNSIGNED,
courseid VARCHAR(8) UNSIGNED,
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Student_Courses created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>