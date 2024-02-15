<?php

session_start();


include("c_koneksi.php"); // Sertakan file koneksi.php


// Ambil nilai dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa apakah username ada dalam database
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    // Verifikasi password
    if (password_verify($password, $row['password'])) {
        // Password cocok, atur sesi dan arahkan ke halaman yang sesuai
        session_start();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['status'] = "login";
        header("Location: ../views/Dashboard.php"); // Ubah sesuai dengan halaman yang sesuai setelah login
        exit();
    } else {
        echo "<script type='text/javascript'>
        alert('Username atau Password salah');
        window.location = '../login.php';
    </script>";
    }
} else {
    echo "<script type='text/javascript'>
    alert('Username Tidak Ada');
    window.location = '../login.php';
</script>";
}


// Tutup koneksi
mysqli_close($conn);
?>
