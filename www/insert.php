<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "activity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sal=$_POST['sal'];
$dep=$_POST['dep'];

$sql = "INSERT INTO save (id, fname, lname, sal, deparment)
VALUES (null, '$fname', '$lname', '$sal', '$dep')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>