<?php

require './BarangModel.php';

$barangModel = new BarangModel;

$barang = $barangModel->all();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Barang</title>
</head>

<body>
    <h1 style="text-align: center;">Cetak Data Barang</h1>
    <table border="1" style="width: 100%;">
        <tr>
            <th>Nama Barang</th>
            <th>Tipe Barang</th>
            <th>Jumlah Barang</th>
            <th>Harga Barang</th>
        </tr>
        <?php foreach ($barang as $item) : ?>
            <tr>
                <td><?= $item->nama ?></td>
                <td><?= $item->tipe ?></td>
                <td><?= $item->jumlah ?></td>
                <td><?= $item->harga ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script>
        window.print()
    </script>
</body>

</html>