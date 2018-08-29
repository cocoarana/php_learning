<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Page 1</title>
  </head>
  <body>
    <h1>Hello World</h1>

    <form method="GET">
      <input type="text" name="Person">
      <button type="button" name="submit">Submit</button>
    </form>
    <br>

    <?php
      echo "Hi there!!\n";
      $name = $_GET['Person'];
      echo "General ".$name."!!";
      
    ?>

    <div>
      <!--<form class="" action="index.html" method="post">
        <p>Username:</p>
        <input type="text" name="" value="">
        <p>Password:</p>
        <input type="Password" name="" value="">
        <br><br>
        <input type="submit" name="" value="Log In">
      </form>-->
    </div>
  </body>
</html>
