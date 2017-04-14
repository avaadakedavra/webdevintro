<?php
$servername = "localhost";
$username = "root";
$password = "jbrag42669";
$dbname = "examform";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<br><center>Connected successfully</center><br>";
?>
