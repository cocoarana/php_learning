<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
    <h1>Basic Calculator</h1>
    <form class=""method="Post">
      <input type="text" name="n1" placeholder="Set first Number">
      <input type="text" name="n2" placeholder="Set second Number">
      <select name="option">
        <option>Select an option</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
        <option>Potentiate</option>
        <option>Module</option>
      </select>
      <br><br>
      <button type="submit" name="submit" value="submit">Submit</button>
      <br><br>
      <?php
        $v1 = $_POST['n1'];
        $v2 = $_POST['n2'];
        $operator = $_POST['option'];

        if (is_numeric($v1)&&is_numeric($v2)&&$operator <> "Select an option") {
          switch ($operator) {
            case 'Add':
              echo $v1+$v2;
              break;
            case 'Substract':
              echo $v1-$v2;
              break;
            case 'Multiply':
              echo $v1*$v2;
              break;
            case 'Divide':
              echo $v1/$v2;
              break;
            case 'Potentiate':
              echo $v1**$v2;
              break;
            case 'Module':
              echo $v1%$v2;
                  break;
          }
        }else {
          echo "The numbers/option you set ae not valid, please ty again.";
        }
        echo "<br><br>";
       ?>
    </form>
    <br><br>
    <a href="index.php">Go to Home</a>
  </body>
</html>
