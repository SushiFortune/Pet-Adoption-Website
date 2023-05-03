<?php
session_start();
if(isset($_SESSION['username'])) {
  session_destroy();
  header("Location:confirmation.php");
  exit();
} else {
  
  header("Location:logout2.php");
}
?>
