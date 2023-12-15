<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idNasabah = $_POST['id_nasabah'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $pekerjaan = $_POST['pekerjaan'];
    $noTelp = $_POST['no_telp'];
    $noRek = $_POST['no_rek'];

    $sql = "insert into form_nasabahs (id_nasabah, nama, alamat, jenis_kelamin, pekerjaan, no_telp, no_rek)
    VALUES ('$idNasabah', '$nama', '$alamat', '$jk', '$pekerjaan', '$noTelp', '$noRek')";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Data berhasil disimpan");</script>';
        // Jika data berhasil disimpan, kita dapat memperoleh ID yang baru saja dimasukkan
        $idInserted = mysqli_insert_id($conn);

        // Jika ID berhasil diperoleh, kita dapat menggunakan JavaScript untuk mengarahkan pengguna ke halaman isi_data.php dengan menyertakan ID
        // echo '<script> window.location.href = "isi_data.php?id='.$idInserted.'";</script>';
        echo '<script>redirectToIsiData(' . $idInserted . ')</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
$conn->close();
?>


<?php include 'head.php' ?>
<?php
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<article>
    <div class="data_nasabah">
        <span class="d-flex">
            <button class="btnData">FORM DATA NASABAH</button>
        </span>
        <div class="form_nasabah">
            <form method="post" action="">
                <div class="d-flex form">
                    <span>
                        <p>ID Nasabah</p>
                        <p>Nama</p>
                        <p>Alamat</p>
                        <p>Jenis Kelamin</p>
                        <p>Pekerjaan</p>
                        <p>No Telp</p>
                        <p>No Rekening</p>
                    </span>
                    <span>
                        <input type="text" name="id_nasabah" required>
                        <input type="text" name="nama" required>
                        <input type="text" name="alamat"> <br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan" style="box-shadow: none;">Perempuan
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" style="box-shadow: none;">Laki-laki
                        <input type="text" name="pekerjaan">
                        <input type="text" name="no_telp">
                        <input type="text" name="no_rek">
                    </span>
                </div>
                <span class="d-flex btnForm">
                <button type="button" onclick="cancelForm()">BATAL</button>
                    <button type="submit" name="submit" onclick="toNasabah()">TAMBAH</button>
                    <!-- <a href="nasabah_all.php">DATA NASABAH</a> -->
                </span>
            </form>
        </div>
        <script src="/nasabah_all.php">
        </script>
    </div>

</article>
<script>
    function cancelForm() {
        document.getElementById("formData").reset();
    }
    function toNasabah()  {
        window.location.href = 'nasabah_all.php';
    }
</script>


<?php include 'foot.php' ?>