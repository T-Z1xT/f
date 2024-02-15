<?php
// Mulai atau lanjutkan sesi
session_start();

// Hapus semua data sesi
session_destroy();

// Redirect ke halaman login atau halaman utama
header("Location:../login.php");
// Penting untuk memastikan tidak ada kode ekstra yang dijalankan setelah redirect
?>