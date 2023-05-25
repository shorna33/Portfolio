<?php
// session_start();

// session_unset();
// session_destroy();

// header("Location: index.php");
?>

<?php
 
session_start();
 
// To check if the session is started.
if(isset($_SESSION["uname"]))
{
 if(time()-$_SESSION["login_time_stamp"] > 600)
 {
 session_unset();
 session_destroy();
 header("Location:main.php");
 }
}
else
{
 header("Location:main.php");
}
?>