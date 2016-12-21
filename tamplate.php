<?php include 'function.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/foundation.css">
  </head>
  <body>
    <div class="row">
        <div class="large-6 columns">
            <nav>
              <ul class="menu">
                <li><a href="form.php">Form</a></li>
                <li><a href="tamplate.php">Tamplate</a></li>
              </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <table class="hover">
                <tr>
                  <?php echo subjectList();?>
                </tr>
                <tr>
                  <?php echo result(); ?>
                </tr>
            </table>
        </div>
    </div>
  </body>
</html>
