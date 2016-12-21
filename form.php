<?php include 'function.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/foundation.css">
  </head>
  <body>
    <div class="row">
        <div class="large-3 columns">
            <nav>
              <ul class="menu">
                <li><a href="form.php">Form</a></li>
                <li><a href="tamplate.php">Tamplate</a></li>
              </ul>
            </nav>
        </div>
    </div>

    <div class="row">
          <form class="large-12 cloumns" action="tamplate.php" method="post">
            <div class="large-4 columns">
              <input type="number" name="DC" placeholder="Data Communication"><br><br>
              <input type="number" name="CA" placeholder="Computer Achitecture"><br><br>
              <input type="number" name="DB" placeholder="Database"><br><br>
            </div>
            <div class="large-4 columns">
              <input type="number" name="ENG" placeholder="English"><br><br>
              <input type="number" name="CPP" placeholder="Cplusplus"><br><br>
              <input type="number" name="DS" placeholder="Data Structure"><br><br>
            </div>
            <div class="large-4 columns">
              <input class="button" type="submit" name="submit" value="Submit">
            </div>
          </form>
    </div>

  </body>
</html>
