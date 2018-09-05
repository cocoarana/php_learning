<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
  </head>
  <body>
    <h1>Hello and welcome to the Home Page!!!</h1>

    <p>Down below you will find the links to all of the projects located on this folder.</p>
    <p>Enjoy... and keep coding!!</p>

        <li><a href="#">Home Page</a><br></li>
        <li><a href="tests.php">Tests</a><br></li>
        <li><a href="calculator.php">Calculator</a><br></li>


      <br><div>
        <p>To enter to the blog please log in here:</p>

        <form action="activities.php?activity=0" method="post">
          <p>Username:</p>
          <input type="text" name="user" placeholder="Username..." autocomplete="off">
          <p>Password:</p>
          <input type="password" name="pass" placeholder="Password..." autocomplete="off">
          <button type="submit" name="submit">Submit</button>
          <?php
          if (isset($_GET['login'])) {
            if ($_GET['login']== 0) {
              echo "<br><br>Incorrect username/password. Please try again.";
            }else
            if ($_GET['login']== 1) {
              echo "<br><br>The session is ended.";
            }
          }else {
            echo "";
          }
           ?>
        </form>


    </div>
  </body>
</html>
