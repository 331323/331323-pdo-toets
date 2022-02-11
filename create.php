<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_sandbox";


  try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO pizza (id, forma, saus, topa, krui)
  VALUES (:id, :forma, :saus, :topa, :krui)");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':forma', $forma);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':topa', $topa);
  $stmt->bindParam(':krui', $krui);
  
  $id = null;
  $forma = $_REQUEST['forma'];
  $saus = $_REQUEST['saus'];
  $topa = $_REQUEST['topa'];
  $krui = $_REQUEST['krui'];

  $stmt->execute();

  echo "New records created successfully";
  header("Refresh:3; ./read.php");
} catch(PDOException $e) {
  echo $e->getMessage();
}
// $conn = null;
?>