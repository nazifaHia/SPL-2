<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_exam";

// Checking connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql code to create table
$sql = "CREATE TABLE employees (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50)
        )";

if (mysqli_query($conn, $sql)) {
    echo "Table employees created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);

?>