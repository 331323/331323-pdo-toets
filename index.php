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
                  <form action="./create.php" method="post">
                        <div class="col mb-3">
                         <label for="forma">Bodemformaat</label>
                         <select name="forma" class="form-select" aria-label="Disabled select example">
                                <option value="forma">Maak je keuze:</option>       
                                <option value="forma">20 centimeter</option>
                                <option value="forma">25 centimeter</option>
                                <option value="forma">30 centimeter</option>
                                <option value="forma">35 centimeter</option>
                                <option value="forma">40 centimeter</option>
                         </select>
                        </div>
                        <div class="col mb-3">
                         <label for="saus">Saus</label>
                         <select name="saus" class="form-select" aria-label="Disabled select example">
                                <option value="saus">Maak je keuze:</option>       
                                <option value="saus">Tomatensaus</option>
                                <option value="saus">Extra Tomatensaus</option>
                                <option value="saus">Spicy Tomatensaus</option>
                                <option value="saus">BBQ Saus</option>
                                <option value="saus">CREME Fraiche</option>
                         </select>
                        </div>
                        <div class="col mb-3">
                         <label for="topa">Pizzatoppings</label><br>
                         <input name="topa" type="radio" aria-describedby="genderhelp">
                         <label for="topa">Vegan</label><br>
                         <input name="topa" type="radio" aria-describedby="genderhelp">
                         <label for="topa">Vegetarisch</label><br>
                         <input name="topa" type="radio" aria-describedby="genderhelp">
                         <label for="topa">Vlees</label>
                        </div>
                        <div class="col mb-3">
                         <label for="krui">Kruiden</label><br>
                         <input name="krui" class="form-check-input me-1" type="checkbox" value="">
                         <label for="krui">Peterselie</label><br>
                          <input name="krui" class="form-check-input me-1" type="checkbox" value="">
                         <label for="krui">Oregano</label><br>
                          <input name="krui" class="form-check-input me-1" type="checkbox" value="">
                         <label for="krui">Chili flakes</label><br>
                         <input name="krui" class="form-check-input me-1" type="checkbox" value="">
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