<?php
   session_start();
   $login_session = $_SESSION['login_user'];
   if(!isset($_SESSION['login_user'])){
       
      header("Location:login.php");
      die();
   }
?>