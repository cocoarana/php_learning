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
      echo "<p>"."Hi there!!\n"."</p>";
      $name = $_GET['Person'];
      echo "<p>"."General ".$name."!!</p>";

      echo "<p>".strlen("Hi Jorge")."</p>"; //How many characteres
      echo "<p>".str_word_count("Hi Jorge")."</p>"; // How many words
      echo "<p>".strrev("Hi Jorge")."</p>"; //Reverse
      echo "<p>".str_pos("Hi jorgeee", "Hi")."</p>"; //Position of a word
      echo "<p>".str_pos("Hi jorgeaa", "Hi")."</p>"; //Position of a word

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
