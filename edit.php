<?php

require './BarangModel.php';

$barangModel = new BarangModel;

$barang = $barangModel->find($_GET['id']);

if (!empty($_POST)) {
    $id = $barang->id;
    $nama = $_POST['nama'];
    $tipe = $_POST['tipe'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $barangModel->update($id, $nama, $tipe, $jumlah, $harga);

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
        <input type="text" value="<?= $barang->nama ?>" name="nama" placeholder="nama barang">
        <br>
        <input type="text" value="<?= $barang->tipe ?>" name="tipe" placeholder="tipe barang">
        <br>
        <input type="number" value="<?= $barang->jumlah ?>" name="jumlah" placeholder="jumlah barang">
        <br>
        <input type="number" value="<?= $barang->harga ?>" name="harga" placeholder="harga barang">
        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>