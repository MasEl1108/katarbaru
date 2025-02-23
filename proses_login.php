<?php
session_start();
$file = 'admin.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $lines = file($file, FILE_IGNORE_NEW_LINES);

    foreach ($lines as $line) {
        list($storedUser, $storedPass) = explode("|", $line);
        if ($username == $storedUser && $password == $storedPass) {
            $_SESSION['admin'] = $username;
            echo "Login berhasil! <a href='dashboard.php'>Masuk ke Dashboard</a>";
            exit();
        }
    }

    echo "Username atau password salah. <a href='login.html'>Coba lagi</a>";
}
?>
