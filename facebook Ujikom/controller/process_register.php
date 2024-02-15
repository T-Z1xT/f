<?php
include ("c_koneksi.php"); // Sertakan file koneksi.php

// Ambil nilai dari formulir
$user_id = rand(1,99);
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$alamat = $_POST['alamat'];
$date = $_POST['date'];
$JK = $_POST['JK'];

// Validasi password
if (strlen($password) < 8) {
    echo "<script type='text/javascript'>
    alert('Password Kurang Dari 8 Huruf');
    window.location = '../register.php';
</script>";
exit();
}

if ($password !== $password2) {
    echo "<script type='text/javascript'>
    alert('Password Tidak Sama');
    window.location = '../register.php';
</script>";
exit();
}

// Hash password sebelum menyimpan ke database
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query untuk menyisipkan data ke dalam tabel
$sql = "INSERT INTO user (user_id, username, password, email, fullname, alamat, date, JK)
        VALUES (NULL, '$username', '$hashed_password', '$email', '$fullname', '$alamat', '$date', '$JK')";

echo $sql;
if (mysqli_query($conn, $sql) === TRUE) {
    echo "<script type='text/javascript'>
    alert('Data Berhasil Dtambahkan');window.location = '../login.php';
    </script>";
} else {
    echo "<script type='text/javascript'>
    alert('Data Tidak Berhasil Di Tambahkan');
    window.location = '../register.php';
</script>";
}

exit();

// Tutup koneksi
$conn->close();
?>