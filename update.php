<?php

if (!isset($_GET["id"])) {
    header("Location: ./index.php");
    exit();
}

$id =  $_GET["id"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_sandbox";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $conn->prepare("SELECT id, forma, saus, topa, krui FROM pizza WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $user = $stmt->fetch();
 //   foreach($stmt->fetchAll() as $key=>$value) {
 //   }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>



<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">

        <title>Maakjepizza.org</title>
  </head>
  <body>
      <main class="container">
          <div class="row text-center">
              <div class="col-12">
                  <h1>Maak je eigen pizza</h1>
              </div>
          </div>
          <div class="row">
              <div class="col-3">

              </div>
              <div class="col-6">
                  <form action="./update_script.php" method="post">
                        <div class="col mb-3">
                         <label for="forma">Bodemformaat</label>
                         <select name="forma" class="form-select" aria-label="Disabled select example">
                                <option value="forma" value="<?php echo $user['forma']; ?>">Maak je keuze:</option>       
                                <option value="forma" value="<?php echo $user['forma']; ?>">20 centimeter</option>
                                <option value="forma" value="<?php echo $user['forma']; ?>">25 centimeter</option>
                                <option value="forma" value="<?php echo $user['forma']; ?>">30 centimeter</option>
                                <option value="forma" value="<?php echo $user['forma']; ?>">35 centimeter</option>
                                <option value="forma" value="<?php echo $user['forma']; ?>">40 centimeter</option>
                         </select>
                        </div>
                        <div class="col mb-3">
                         <label for="saus">Saus</label>
                         <select name="saus" class="form-select" aria-label="Disabled select example">
                                <option value="saus" value="<?php echo $user['saus']; ?>">Maak je keuze:</option>       
                                <option value="saus" value="<?php echo $user['saus']; ?>">Tomatensaus</option>
                                <option value="saus" value="<?php echo $user['saus']; ?>">Extra Tomatensaus</option>
                                <option value="saus" value="<?php echo $user['saus']; ?>">Spicy Tomatensaus</option>
                                <option value="saus" value="<?php echo $user['saus']; ?>">BBQ Saus</option>
                                <option value="saus" value="<?php echo $user['saus']; ?>">CREME Fraiche</option>
                         </select>
                        </div>
                        <div class="col mb-3">
                         <label for="top">Pizzatoppings</label><br>
                         <input name="top" type="radio" aria-describedby="genderhelp" value="<?php echo $user['topa']; ?>">
                         <label for="top">Vegan</label><br>
                         <input name="top" type="radio" aria-describedby="genderhelp" value="<?php echo $user['topa']; ?>">
                         <label for="top">Vegetarisch</label><br>
                         <input name="top" type="radio" aria-describedby="genderhelp" value="<?php echo $user['topa']; ?>">
                         <label for="top">Vlees</label>
                        </div>
                        <div class="col mb-3">
                         <label for="krui">Kruiden</label><br>
                         <input name="krui" class="form-check-input me-1" type="checkbox" value="<?php echo $user['krui']; ?>">
                         <label for="krui">Peterselie</label><br>
                          <input name="krui" class="form-check-input me-1" type="checkbox" value="<?php echo $user['krui']; ?>">
                         <label for="krui">Oregano</label><br>
                          <input name="krui" class="form-check-input me-1" type="checkbox" value="<?php echo $user['krui']; ?>">
                         <label for="krui">Chili flakes</label><br>
                         <input name="krui" class="form-check-input me-1" type="checkbox" value="<?php echo $user['krui']; ?>">
                         <label for="krui">Zwarte peper</label>
                        </div>
                        
                        <div class="Button mb-3">
                            <input name="btn" class="form-control" type="submit" value="Bestel">
                        </div>
                  </form>
              </div>
              <div class="col-3"></div>
          </div>
      </main>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>