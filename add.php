<?php

require './BarangModel.php';

$barangModel = new BarangModel;

if (!empty($_POST)) {
    $nama = $_POST['nama'];
    $tipe = $_POST['tipe'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $barangModel->insert($nama, $tipe, $jumlah, $harga);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="nama" placeholder="nama barang">
        <br>
        <input type="text" name="tipe" placeholder="tipe barang">
        <br>
        <input type="number" name="jumlah" placeholder="jumlah barang">
        <br>
        <input type="number" name="harga" placeholder="harga barang">
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>