<?php
include "db_connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sqlStatement = "SELECT * FROM admin WHERE username='$username'";
$query = mysqli_query($conn, $sqlStatement);
$row = mysqli_fetch_assoc($query);

if ($row == "") { // Username tidak ditemukan
    echo "Username tidak ditemukan";
} else { 
    // Gunakan password_verify() untuk memverifikasi password
    if (password_verify($password, $row['password'])) { // Username dan password cocok
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['status'] = "login";
        header("location:admin/index.php");
    }
}
?>
