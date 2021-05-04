<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salontakip";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM rezervasyonlar  ORDER BY id desc limit 1";
$result = $conn->query($sql);
$cname=0;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    //echo trim('<idv id="olddata">'.trim($row["Rezervler"]).'</div>');
    $cname=trim($row["Rezervler"]);
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<script type="text/javascript">

var spge = <?php echo $cname; ?> ;

</script>