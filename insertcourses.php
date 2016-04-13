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
$courseid = "CMSC-201";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-202";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-203";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-304";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-313";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-331";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-341";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-411";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-421";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-441";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-447";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "MATH-151";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "MATH-152";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "MATH-221";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "STAT-355";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-345";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-404";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-426";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-427";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-431";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-432";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-433";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-435";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-436";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-437";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-442";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-443";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-444";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-446";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-448";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-451";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-452";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-453";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-455";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-456";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-457";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-461";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-465";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-466";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-471";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-473";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-475";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-476";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-477";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-478";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-479";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-481";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-483";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-484";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-486";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-487";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-491";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-493";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-495";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-498";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC-499";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>