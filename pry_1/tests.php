<?php
  include_once('includes/dph.php');
 ?>

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
    function calc($x,$y){

    }

      echo "<p>"."Hi there!!\n"."</p>";
      $name = $_GET['Person'];
      echo "<p>"."General ".$name."!!</p>";

      //echo "<p>".strlen("Hi Jorge")."</p>"; //How many characteres
      //echo "<p>".str_word_count("Hi Jorge")."</p>"; // How many words
      echo "<p>".strrev("Hi Jorge")."</p>"; //Reverse
      echo "<p>".strrev("Hi Jorge")."</p>"; //Reverse
      echo "<p>".strpos("Hi jorgeee", "Hi")."</p>"; //Position of a word
      echo "<p>".str_replace("Hi","Bye","Hi jorgeaa")."</p>"; //Position of a word

      $day = date();
      echo $day;

      $a = 1;

      while ($a <= 10) {
        echo $a." ";
        $a++;
      }

      echo "<br><br>";
      $sql = "Select * from  users;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck >0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['uid']." ".$row['username']."<br>";
        }
      }
      else {
        echo "No results on DB";
      }

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
    <br><br>
    <a href="index.php">Go to Home</a>
  </body>
</html>
