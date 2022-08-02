<?php

require './BarangModel.php';

$barangModel = new BarangModel;

if (!empty($_POST)) {
    $id = $_POST['id'];
    $barangModel->delete($id);

    header("Location: index.php");
}
