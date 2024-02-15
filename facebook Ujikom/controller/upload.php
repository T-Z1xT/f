<?php
include ('c_koneksi.php');

$target_dir = "../uploads/";

// Nama file yang diunggah
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Mendapatkan ekstensi file
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Cek apakah file adalah gambar
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File adalah gambar - " . $check["mime"] . ".";
        // Lakukan pengecekan tambahan jika diperlukan, seperti ukuran file
        // Pindahkan file ke lokasi yang diinginkan
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Foto " . basename($_FILES["fileToUpload"]["name"]) . "<script type='text/javascript'>
            alert('Berhasil di upload');
            window.location = '../views/album.php';
        </script>";
        } else {
            echo "<script type='text/javascript'>
            alert('Terjadi kesalahan saat mengupload');
            window.location = '../views/album.php';
        </script>";
        }
    } else {
        echo "<script type='text/javascript'>
        alert('File bukan gambar');
        window.location = '../views/album.php';
    </script>";
    }
}
?>
