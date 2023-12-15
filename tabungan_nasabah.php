<?php

include 'koneksi.php';

// $idNasabah = $_GET['idNasabah'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['tanggal'], $_POST['jenis'], $_POST['satuan'], $_POST['debet'], $_POST['kredit'], $_POST['saldo'], $_POST['id_nasabah'])) {
        $tanggal = $_POST['tanggal'];
        $jenis = $_POST['jenis'];
        $satuan = $_POST['satuan'];
        $debet = $_POST['debet'];
        $kredit = $_POST['kredit'];
        $saldo = $_POST['saldo'];

        $idNasabah = $_POST['id_nasabah'];

        $queryInsert = "INSERT INTO data_nasabah (id_sampah, tanggal, jenis, satuan, debet, kredit, saldo) 
                        VALUES ('$idNasabah', '$tanggal', '$jenis', '$satuan', '$debet', '$kredit', '$saldo')";

        if (mysqli_query($conn, $queryInsert)) {
            echo "<script>alert('Data berhasil disimpan')</script>";
        } else {
            echo "Error: " . $queryInsert . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Semua kolom harus diisi.";
    }
}

if (isset($_GET['idNasabah'])) {

    $idNasabah = $_GET['idNasabah'];
    $sql = "SELECT * FROM  data_nasabah where id_sampah=$idNasabah";

    $result = $conn->query($sql);
} else {
    echo "Semua kolom harus diisi.";
}

?>

<?php include 'head.php' ?>
<?php
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<article>
    <style>
        .tabungan_nasabah table td button {
            background: transparent;
            border: none;
            width: min-content;
            height: min-content;
            padding: 0;
            margin: 0;
            box-shadow: none;
        }

        article .back {
    width: 100%;
    height: 50px;
    margin-top: 3% !important;
    align-items: end;
    justify-content: right;
}
    </style>

    <div class="tabungan_nasabah">
        <span class="d-flex">
            <button>DATA TABUNGAN NASABAH</button>
        </span>
        <h4 style="margin: 5px 20px;">ID NASABAH : <?php echo $idNasabah ?></h4>
        <span class="d-flex">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID SAMPAH</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">JENIS</th>
                        <th scope="col">SATUAN</th>
                        <th scope="col">DEBET</th>
                        <th scope="col">KREDIT</th>
                        <th scope="col">SALDO</th>
                        <th scope="col" colspan="2">AKSI</th>
                    </tr>
                </thead>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        $idSam = $row["id_sampah"];
                        $tanggalSam = $row["tanggal"];
                        $jenisSam = $row["jenis"];
                        $satuanSam = $row["satuan"];
                        $debetSam = $row["debet"];
                        $kreditSam = $row["kredit"];
                        $saldoSam = $row["saldo"];
                ?>
                        <tbody>
                            <tr>
                                <td id="" style="display:none;"><?php echo $id ?></td>
                                <th id="idSam" scope="row"><?php echo $idSam ?></th>
                                <td id="tanggalSam"><?php echo $tanggalSam ?></td>
                                <td id="jenisSam"><?php echo $jenisSam ?></td>
                                <td id="satuanSam"><?php echo $satuanSam ?></td>
                                <td id="debetSam"><?php echo $debetSam ?></td>
                                <td id="kreditSam"><?php echo $kreditSam ?></td>
                                <td id="saldoSam"><?php echo $saldoSam ?></td>
                                <td>
                                    <button onclick="editRow(<?php echo $id; ?>)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                            <path d="M9.625 23.3927L15.6929 23.3721L28.9369 10.2546C29.4566 9.73481 29.7426 9.04456 29.7426 8.31031C29.7426 7.57606 29.4566 6.88581 28.9369 6.36606L26.7561 4.1853C25.7166 3.1458 23.903 3.1513 22.8718 4.18118L9.625 17.3014V23.3927ZM24.8119 6.12956L26.9968 8.30618L24.8009 10.4814L22.6201 8.30206L24.8119 6.12956ZM12.375 18.4482L20.6662 10.2353L22.847 12.4161L14.5571 20.6262L12.375 20.6331V18.4482Z" fill="#699BF7" />
                                            <path d="M6.875 28.875H26.125C27.6416 28.875 28.875 27.6416 28.875 26.125V14.2065L26.125 16.9565V26.125H11.2172C11.1815 26.125 11.1444 26.1388 11.1086 26.1388C11.0633 26.1388 11.0179 26.1264 10.9711 26.125H6.875V6.875H16.2896L19.0396 4.125H6.875C5.35837 4.125 4.125 5.35837 4.125 6.875V26.125C4.125 27.6416 5.35837 28.875 6.875 28.875Z" fill="#699BF7" />
                                        </svg>
                                        Edit
                                    </button>
                                </td>
                                <td>
                                    <button onclick="DeleteRow(<?php echo $id; ?>)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
                                            <path d="M10.7915 32.375C9.94359 32.375 9.21798 32.0733 8.61467 31.47C8.01136 30.8667 7.7092 30.1406 7.70817 29.2917V9.25H6.1665V6.16667H13.8748V4.625H23.1248V6.16667H30.8332V9.25H29.2915V29.2917C29.2915 30.1396 28.9899 30.8657 28.3865 31.47C27.7832 32.0744 27.0571 32.376 26.2082 32.375H10.7915ZM13.8748 26.2083H16.9582V12.3333H13.8748V26.2083ZM20.0415 26.2083H23.1248V12.3333H20.0415V26.2083Z" fill="#699BF7" />
                                        </svg>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                    }
                } else {
                    ?>
                    <script>
                        alert("Data kosong");
                    </script>
                <?php
                }
                ?>
            </table>
        </span>
        <span class="d-flex back">
            <button onclick="goBack()">BACK</button>
        </span>
    </div>
</article>
<script>
    function editRow(id) {

        window.location.href = 'edit_page.php?id=' + id;
    }

    function goBack() {
        window.history.back();
    }

    function DeleteRow(id) {

        window.location.href = 'delete_nasabah.php?id=' + id;
    }
</script>

<?php include 'foot.php' ?>