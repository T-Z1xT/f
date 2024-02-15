<?php

session_start();
include_once "c_koneksi.php";

class c_login
{
    public function register($id, $username, $fullname, $email, $alamat, $password, $JK, $date)
    {
        $conn = new c_conn();
        if (isset($_POST['register'])) {
            $cek = mysqli_query($conn->conn(), "SELECT * FROM user WHERE email = '$email' OR username = '$username'");
            $data = mysqli_num_rows($cek);
            if ($data > 0) {
                echo "<script> alert('email / username sudah terdaftar');
                    document.location.href = '../register.php';
                    </script>";
            } else {
                $query = mysqli_query($conn->conn(), "INSERT INTO user VALUES ('$id', '$username', '$password', '$email', '$fullname', '$alamat', '$date', '$JK')");
            }
        }
    }

    public function login($usermail, $password)
    {
        $conn = new c_conn();
        if (isset($_POST['login'])) {
            $query = mysqli_query($conn->conn(), "SELECT * FROM user WHERE email='$usermail' OR username='$usermail'");
            $data = mysqli_fetch_assoc($query);
            if ($data) {
                if (password_verify($password, $data['password'])) {
                    $_SESSION['data'] = $data;
                    $_SESSION['user_id'] = $data['user_id'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['fullname'] = $data['fullname'];
                    $_SESSION['alamat'] = $data['alamat'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['JK'] = $data['JK'];
                    $_SESSION['status'] = "login";

                    header("Location: ../views/Dashboard.php");
                    exit;
                } else {
                    echo "<script> alert('password anda salah!');
            document.location.href = '../login.php';
            </script>";
                }
            } else {
                echo "<script> alert('username / email anda salah!');
            document.location.href = '../login.php';
            </script>";
            }
        }
    }

    public function logout()
    {
        session_destroy();

        header("Location:../login.php");
        exit;
    }

    public function ganti($id, $email, $passwordold, $password)
    {
        $conn = new c_conn();
        if (isset($_POST['cpassword'])) {
            $query = "SELECT * FROM user WHERE Email = '$email'";
            $sql = mysqli_query($conn->conn(), $query);
            $data = mysqli_fetch_assoc($sql);
            if ($data) {
                if (password_verify($passwordold, $data['Password'])) {
                    $datas = mysqli_query($conn->conn(), "UPDATE user SET Password = '$password' WHERE UserID = $id");
                    session_destroy();
                    echo "<script> alert('Password Telah Di Ubah');
                    document.location.href = '../index.php';
                    </script>";
                    exit;
                } else {
                    echo "<script> alert('Password lama anda salah');
                    document.location.href = '../views/profil.php';
                    </script>";
                }
            }
        }
    }

    public function update($id, $nama, $alamat, $kelamin, $img)
    {
        $conn = new c_conn();
        $query = "UPDATE user SET NamaLengkap='$nama', Alamat='$alamat', JK='$kelamin', img='$img' WHERE UserID = $id";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function img($id)
    {
        $conn = new c_conn();
        $query = "SELECT * FROM user WHERE UserID = $id";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function delete($id) {
        $conn = new c_conn();
        $query = mysqli_query($conn->conn(), "UPDATE user SET img='icon.jpg' WHERE UserID = $id");
    }
}
