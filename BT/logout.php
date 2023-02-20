<?php
    session_start();
    if(isset($_SESSION['tk'])){
        unset($_SESSION['tk']);
    }
    header('location:login.php');
?>