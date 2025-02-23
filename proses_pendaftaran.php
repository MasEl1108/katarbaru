<?php
$file = 'users.json';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $dataBaru = array("nama" => $nama, "email" => $email, "telepon" => $telepon);

    if (file_exists($file)) {
        $data = json_decode(file_get_contents($file), true);
    } else {
        $data = array();
    }

    $data[] = $dataBaru;

    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

    echo "Pendaftaran berhasil! <a href='pendaftaran.html'>Kembali</a>";
}
?>
