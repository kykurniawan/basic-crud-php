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
    <title>Document</title>
</head>

<body>
    <a href="add.php">Tambah Data</a>
    <a href="print.php" target="_blank">Cetak Data</a>
    <br>
    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>Tipe Barang</th>
            <th>Jumlah Barang</th>
            <th>Harga Barang</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($barang as $item) : ?>
            <tr>
                <td><?= $item->nama ?></td>
                <td><?= $item->tipe ?></td>
                <td><?= $item->jumlah ?></td>
                <td><?= $item->harga ?></td>
                <td>
                    <a href="edit.php?id=<?= $item->id ?>">Edit</a>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?= $item->id ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>