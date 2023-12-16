<?php

include 'koneksi.php';

$nasabah = [];



if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $idNasabah = $_GET['id'];

    $query = "SELECT * FROM form_nasabahs WHERE id_nasabah = '$idNasabah'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $existingIdNasabah = $row['id_nasabah'];
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

$conn->close();
?>

<?php include 'head.php' ?>
<article>
    <div class="fill_data">
        <span class="d-flex">
            <button class="btnFill">FORM DATA NASABAH</button>
        </span>
        <div class="form_nasabah">
            <form method="post" action="tabungan_nasabah.php?idNasabah=<?php echo $existingIdNasabah; ?>">
                <div class="d-flex form">
                    <span>
                        <p>ID Nasabah</p>
                        <p>Tanggal</p>
                        <p>Jenis</p>
                        <p>Satuan</p>
                        <p>Debet</p>
                        <p>Kredit</p>
                        <p>Saldo</p>
                    </span>
                    <span>
                        <input type="text" name="id_nasabah" value="<?php echo $existingIdNasabah; ?>" readonly>
                        <input type="date" name="tanggal" required>
                        <input type="text" name="jenis" required>
                        <input type="text" name="satuan" required>
                        <input type="text" name="debet" required>
                        <input type="text" name="kredit" required>
                        <input type="text" name="saldo" required>
                    </span>
                </div>
                <span class="d-flex btnForm">
                    <button type="button" onclick="cancelForm()">BATAL</button>
                    <button type="submit" name="submit">SAVE</button>
                </span>
            </form>
        </div>
    </div>
</article>
<script>
    function cancelForm() {
        document.getElementById("formData").reset();
    }
</script>

<?php include 'foot.php' ?>