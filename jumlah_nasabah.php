<?php

include 'koneksi.php';

$sql = "SELECT id_nasabah, nama FROM form_nasabahs";
$result = $conn->query($sql);

?>

<?php include 'head.php' ?>
<?php
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<article>
    <div class="jml_nasabah">
        <span class="d-flex">
            <button>JUMLAH NASABAH</button>
        </span>
        <span class="d-flex">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">ID NASABAH</th>
                        <th scope="col">NAMA NASABAH</th>
                    </tr>
                </thead>
                <?php
                $count = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $idNas = $row["id_nasabah"];
                        $namaNas = $row["nama"];
                        $count++
                ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $count ?></th>
                                <td><?php echo $idNas ?></td>
                                <td><?php echo $namaNas ?></td>
                            </tr>
                        </tbody>
                <?php
                    }
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