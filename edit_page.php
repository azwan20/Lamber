<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'], $_POST['tanggal'], $_POST['jenis'], $_POST['satuan'], $_POST['debet'], $_POST['kredit'], $_POST['saldo'])) {
        $id = $_POST['id'];
        // $idSampah = $_POST['id_sampah'];
        $tanggal = $_POST['tanggal'];
        $jenis = $_POST['jenis'];
        $satuan = $_POST['satuan'];
        $debet = $_POST['debet'];
        $kredit = $_POST['kredit'];
        $saldo = $_POST['saldo'];

        $queryUpdate = "UPDATE data_nasabah SET 
                        tanggal = '$tanggal', 
                        jenis = '$jenis', 
                        satuan = '$satuan', 
                        debet = '$debet', 
                        kredit = '$kredit', 
                        saldo = '$saldo' 
                        WHERE id = $id";

        if (mysqli_query($conn, $queryUpdate)) {
            echo '<script>alert("Data berhasil diupdate";)</script';
        } else {
            echo "Error: " . $queryUpdate . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Semua kolom harus diisi.";
    }
}

// Fetch the data for the selected ID from the database
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM data_nasabah WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tanggal = $row["tanggal"];
        $jenis = $row["jenis"];
        $satuan = $row["satuan"];
        $debet = $row["debet"];
        $kredit = $row["kredit"];
        $saldo = $row["saldo"];
    } else {
        echo "Data tidak ditemukan.";
    }
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
    <div class="fill_data">
        <span class="d-flex">
            <button class="btnFill">Edit Data Nasabah</button>
        </span>
        <div class="form_nasabah">
            <form action="edit_page.php" method="post">
                <div class="d-flex form">
                    <span>
                        <p>Tanggal</p>
                        <p>Jenis</p>
                        <p>Satuan</p>
                        <p>Debet</p>
                        <p>Kredit</p>
                        <p>Saldo</p>
                    </span>
                    <span>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="date" id="tanggal" name="tanggal" value="<?php echo $tanggal; ?>">
                        <input type="text" id="jenis" name="jenis" value="<?php echo $jenis; ?>"><br>
                        <input type="text" id="satuan" name="satuan" value="<?php echo $satuan; ?>"><br>
                        <input type="text" id="debet" name="debet" value="<?php echo $debet; ?>"><br>
                        <input type="text" id="kredit" name="kredit" value="<?php echo $kredit; ?>"><br>
                        <input type="text" id="saldo" name="saldo" value="<?php echo $saldo; ?>"><br>
                    </span>
                </div>
                <span class="d-flex btnForm">
                    <button onclick="goBack()">BACK</button>
                    <button type="submit" name="submit">SAVE</button>
                </span>
            </form>
        </div>
    </div>
    <script>
            function goBack() {
                window.history.back();
            }
        </script>
</article>
<?php include 'foot.php' ?>