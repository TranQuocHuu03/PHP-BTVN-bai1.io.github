<?php
  session_start();
  if (isset($_POST['Submit'])) {
    $_SESSION['test'] = $_POST['username'];
    echo $_SESSION['test'];
  } 
  else {
    echo "No submit";
  }
?>