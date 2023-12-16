<?php

include 'koneksi.php';

// Query untuk menghitung jumlah jenis yang sama
$query = "SELECT jenis, COUNT(*) as jumlah FROM data_nasabah GROUP BY jenis";
$result = $conn->query($query);

// Menyimpan hasil query dalam array
$jenisCounts = array();
while ($row = $result->fetch_assoc()) {
    $jenis = $row['jenis'];
    $jumlah = $row['jumlah'];
    $jenisCounts[$jenis] = $jumlah;
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
    <div class="jml_sampah">
        <span class="d-flex">
            <button>JUMLAH SAMPAH</button>
        </span>
        <span class="d-flex">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">JENIS</th>
                        <th scope="col">JUMLAH (kg)</th>
                    </tr>
                </thead>
                <?php
                foreach ($jenisCounts as $jenis => $jumlah) { ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $jenis ?></th>
                            <td><?php echo $jumlah ?></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </span>
        <span class="d-flex back">
            <button onclick="goBack()">BACK</button>
        </span>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>

</article>
<?php include 'foot.php' ?>