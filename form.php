<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/foundation.css">
  </head>
  <body>

    <?php include 'function.php'; Validate(); ?>
    <div class="row" style="margin-top:20px;">
          <h3 style="font-weight:bold;text-align:center;">Year 2 Semester 1 Dashboard</h3>
          <p><?php echo Validate(); ?></p>
          <form action="<?php PHP_SELF?>" method="post">
            <div class="large-6 columns">
              <input type="number" name="DC" placeholder="Data Communication">
              <input type="number" name="CA" placeholder="Computer Achitecture">
              <input type="number" name="DB" placeholder="Database">
              <input class="button" type="submit" name="submit" value="Submit">
            </div>
            <div class="large-6 columns">
              <input type="number" name="ENG" placeholder="English">
              <input type="number" name="CPP" placeholder="Cplusplus">
              <input type="number" name="DS" placeholder="Data Structure">
            </div>
          </form>
    </div>

      <div class="large-12 columns">
        <table>
          <tr>
            <?php echo subjectList(); ?>
          </tr>
          <tr>
            <?php echo Result(); ?>
          </tr>
        </table>
      </div>

  </body>
</html>
