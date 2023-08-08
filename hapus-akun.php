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


include 'config/app.php';

// menerima id akun yang dipilih
$id_akun = (int)$_GET['id_akun'];

if (delete_akun($id_akun) > 0) {
    echo "<script>
            alert('data akun berhasil dihapus');
            document.location.href = 'akun.php';
          </script>";
}else {
    echo "<script>
            alert('data akun gagal dihapus');
            document.location.href = 'akun.php';
          </script>";
}

?>