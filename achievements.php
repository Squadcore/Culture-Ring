<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "culturering";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, Name, ImageLink FROM achievements";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<img src=" . $row["ImageLink"]. ">" ; 
    }
} else {
    echo "0 results";
}


?>

