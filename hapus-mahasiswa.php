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

// menerima id mahasiswa yang dipilih
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

if (delete_mahasiswa($id_mahasiswa) > 0) {
    echo "<script>
            alert('data mahasiswa berhasil dihapus');
            document.location.href = 'mahasiswa.php';
          </script>";
}else {
    echo "<script>
            alert('data mahasiswa gagal dihapus');
            document.location.href = 'mahasiswa.php';
          </script>";
}

?>