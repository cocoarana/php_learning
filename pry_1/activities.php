<?php
  include_once('includes/dph.php');  //DB Access
  $activity = $_GET['activity'];     //Activity to perform
  if($activity == 0){                //Log In
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $userCheckSt = "Select * from users where username = '".$user."';";
    $passCheckSt = "Select *  from users where pass = '".$pass."';";
    $r1 = mysqli_query($conn,$userCheckSt);
    $r2 = mysqli_query($conn,$passCheckSt);
    $r1_ch = mysqli_num_rows($r1);
    $r2_ch = mysqli_num_rows($r2);
    if ($r1_ch >0 && $r2_ch >0) {
      $rows = mysqli_fetch_assoc($r1);
      $uid = $rows['uid'];
      $cookie_name = "Username";
      $cookie_value = $user;
      setcookie($cookie_name,$cookie_value,time() + (900), "/");
      setcookie("uid",$uid,time() + (900), "/");
      header("Location: ../pry_1/myblog.php");
    }else {
      header("Location: ../pry_1/index.php?login=0");
    }
  }
  else if($activity == 1){          //New entry
    if (isset($_COOKIE['uid'])) {
      $uid = $_COOKIE['uid'];
      $user = $_COOKIE['Username'];
      $entry = $_POST['entry'];
      $date = date("Y-m-d h:i:s");
      $timezone = date("e");
      $query = "insert into logs (uid, date_log, log, timezone) values (".
        $uid.",'".$date."','".$entry."','".$timezone."');";
      mysqli_query($conn, $query);
      setcookie("Username",$user,time()+(900),"/");
      setcookie("uid",$uid,time()+(900),"/");
      header("Location: ../pry_1/myblog.php");
    }else {
      header("Location: ../pry_1/index.php?login=1");
    }
  }
 ?>
