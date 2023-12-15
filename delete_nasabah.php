<?php
include 'koneksi.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_nasabah'])) {
        $idNasabah = $_POST['id_nasabah'];
    }
}



if (isset($_GET['id'])) {
    $idNews = $_GET['id'];
    global $idNasabah;
    $sqls = "DELETE FROM data_nasabah WHERE id = $idNews";
    $result = $conn->query($sqls);

    // echo "<script>window.history.back();</script>";
    // echo "<script>location.reload()</script>";
    
    echo "<script>window.location.href = 'nasabah_all.php'</script>";
    exit();


} else {
    echo "ID tidak valid.";
}


