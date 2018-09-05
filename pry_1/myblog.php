<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Blog</title>
  </head>
  <body>
    <?php
    echo "<h1>Welcome to my blog ".$_COOKIE['Username']."</h1>";
     ?>
     <a href="index.php">Log Out</a>
     <br><br>
     <table>
       <tr>
         <th>Log</th>
         <th>Date Log</th>
         <th>Timezone from Log</th>
       </tr>
     <?php
     include_once("includes/dph.php");
      $uid = $_COOKIE['uid'];
      $st = "Select log, date_log, timezone from logs where uid =".$uid;
      $result = mysqli_query($conn,$st);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>".$row['log']."</td><td>".$row['date_log']."</td><td>".$row['timezone']."</td></tr>";
        }
      }
      ?>
      </table>
     <br><br>
     <form action="activities.php?activity=1" method="post">
       <textarea name="entry" rows="4" cols="80" placeholder="New entry..."></textarea>
       <br>
       <button type="submit" name="submit">Submit</button>
     </form>
  </body>
</html>
