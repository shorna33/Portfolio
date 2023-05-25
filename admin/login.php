<?php
session_start();
  include "../includes/connect.php";

  if(isset($_POST['uname']) && isset($_POST['pass'])){

    function validate($data) {
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  }

  $uname = validate($_POST['uname']);
  $pass = validate($_POST['pass']);

  if(empty($uname)) {
    header("Location: main.php?error=Username is required");
    exit();
  }
  else if(empty($pass)) {
    header("Location: main.php?error=Password is required");
    exit();
  }

  $sql = "SELECT * FROM admin WHERE uname='$uname' AND pass='$pass'";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['uname'] === $uname && $row['pass'] === $pass) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['uname'] = $row['uname'];

      header("Location: admin.php");
      exit();
    }
    
  }
  else{
    header("Location: main.php?error=Incorrect credentials");
    exit();
  }


?>
