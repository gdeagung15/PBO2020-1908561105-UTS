<?php

require "./Database.php";
require "./Catatan.php";

if (isset($_POST['add-button'])) {
    $nilaiInputan = $_POST['input-field'];
    $db = new Database();
    $conn = $db->getConn();

    $catatan = new Catatan($nilaiInputan);

    $query = "INSERT INTO catatan(isi) VALUES (\"".$catatan->getIsi()."\")";
    $conn->query($query);
    $conn->close();

    header("Location: ./");
}

if (isset($_POST['delete-button'])) {
    $id = $_POST['delete-button'];

    $db = new Database();
    $conn = $db->getConn();

    $query = "DELETE FROM catatan WHERE id=".$id;
    $conn->query($query);
    $conn->close();

    header("Location: ./");
}

if (isset($_POST['edit-button'])) {
    $id = $_POST['edit-button'];
    $isiBaru = $_POST['update-field'];

    $db = new Database();
    $conn = $db->getConn();

    $query = "UPDATE catatan SET isi=\"".$isiBaru."\" WHERE id=".$id;
    $conn->query($query);
    $conn->close();

    header("Location: ./");
}


?>