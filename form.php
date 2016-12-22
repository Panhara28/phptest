<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php include 'function.php'; Validate(); ?>
    <form class="" action="" method="post">
      <input type="number" name="math" placeholder="Math"><br><br>
      <input type="number" name="cpp" placeholder="Cpp"><br><br>
      <input type="number" name="fund" placeholder="Fund"><br><br>
      <input type="submit" name="submit" value="Submit"><br>
    </form>

    <table>
      <tr>
        <?php echo subjectList(); ?>
      </tr>
      <tr>
        <?php echo result(); ?>
      </tr>
    </table>
  </body>
</html>
