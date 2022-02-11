<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_sandbox";
// var_dump($_POST);exit();
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE pizza
          SET    forma = :forma,
                 saus = :saus,
                 topa = :topa,
                 krui = :krui
          WHERE  id = :id";

  // Prepare statement
  $stmt = $conn->prepare($sql);


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
  // execute the query

  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo  "record met id={$id} UPDATED successfully";
  header("Refresh:5; ./read.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>