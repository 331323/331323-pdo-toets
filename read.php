<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_sandbox";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, forma, saus, topa,krui FROM pizza");
  $stmt->execute();
  
  //set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_OBJ);


  
  // $tableRow ="";
  // while ($record = $stmt->fetch(PDO::FETCH_OBJ)){
  //   $tableRow .= "<tr>
  //   <th>$record->id</th> 
  //   <th>$record->forma</th>
  //   <th>$record->saus</th>
  //   <th>$record->topa,krui</th>";
  // }

  $tableRow = "";
  foreach($stmt->fetchAll() as $key=>$value) {
    $tableRow .= "<tr>
    <td>$value->id</td>
    <td>$value->forma</td>
    <td>$value->saus</td>
    <td>$value->topa</td>
    <td>$value->krui</td>

     <td>
        <a href='./delete.php?id=" .  $value->id  . "'>
            <img src='' alt=''>
        </a>
      </td >

      <td>
      <a href='./update.php?id=" . $value->id ."'>
         <img src='./img/edit.svg' alt='Update'>
      </a>
    </td >

    <td>
        <a href='./delete.php?id=" .  $value->id  . "'>
            <img src='./img/trash-2.svg' alt='Delete'>
        </a>
      </td >

    </tr>";
   }
  //  var_dump($stmt->fetchAll());exit();

} catch(PDOException $e) {
  echo  $e->getMessage();
}
$conn = null;
echo "</table>"
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Maakjepizza.org</title>
 </head><br>

  <body>
    <main class="container">
      <div class="row text-center">
          <div class="col-12">
              <h1>Maak je eigen pizza</h1>
          </div>
      </div>
      <a class="btn-dark" href="index.php" type="button">Nieuw Record</a>
      <div class="row">
        <div class="col-12">
          <!--Op dzez plek komt de tabel -->
          <table class=" table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Formaat</th>
                <th scope="col">Saus</th>
                <th scope="col">Toppings</th>
                <th scope="col">Kruiden</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
              <?php
               echo $tableRow;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
  </body>
</html>