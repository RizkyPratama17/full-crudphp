<?php

session_start();

// membatasi halaman login
if (!isset($_SESSION['login'])) {
    echo "<script>
             alert('Hara login terlebih dahulu');
             document.location.href = 'login.php';
          </script>";
     exit;
 }

 // kosongkan session user login
 $_SESSION = [];

 session_unset();
 session_destroy();
 header("Location: login.php");

?>