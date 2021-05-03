<?php
$deger = $_POST['deger'];
print_r($deger);




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salontakip";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$tarih=date("yyddmm");

$sql = "INSERT INTO rezervasyonlar (Rezervler, tarih, Kaydeden) VALUES ('$deger', '$tarih', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>