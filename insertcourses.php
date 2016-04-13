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
$courseid = "CMSC201";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC202";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC203";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC304";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC313";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC331";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC341";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC411";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC421";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC441";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC447";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "MATH151";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "MATH152";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "MATH221";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "STAT355";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC345";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC404";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC426";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC427";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC431";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC432";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC433";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC435";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC436";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC437";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC442";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC443";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC444";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC446";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC448";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC451";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC452";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC453";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC455";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC456";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC457";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC461";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC465";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC466";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC471";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC473";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC475";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC476";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC477";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC478";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC479";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC481";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC483";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC484";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC486";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC487";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC491";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC493";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC495";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC498";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$courseid = "CMSC499";
$sql = "INSERT INTO Courses (courseid) VALUES ('$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "New course created successfully <br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>