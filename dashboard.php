<?php

include 'koneksi.php';



$sql = "SELECT * FROM form_nasabahs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $idNas = $row["id_nasabah"];
        $namaNas = $row["nama"];
        $alamatNas = $row["alamat"];
        $jkNas = $row["jenis_kelamin"];
        $pekerjaanNas = $row["pekerjaan"];
        $no_telpNas = $row["no_telp"];
        $no_rekNas = $row["no_rek"];
    }
}
?>


<style>
    .dashboard .h1 {
        background-color: #fff;
        border-radius: 20px;
        border: 1px solid #2E4E6B;
        width: fit-content;
        height: 10vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 40px 30px 10px;
    }

    .dashboard h1 {
        font-size: 26px;
        font-weight: bold;
    }

    a {
        text-decoration: none !important;
    }
</style>


<?php include 'head.php' ?>

<article>
    <div class="dashboard">
        <div class="h1">
            <h1>Dashboard</h1>
        </div>
        <span class="d-flex">
            <div class="card">
                <div class="cardHead">
                    <h3>JUMLAH NASABAH</h3>
                </div>
                <a href="jumlah_nasabah.php">
                    <div class="cardFoot" id="nasabah-tab">
                        <h4>Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 64 64" fill="none">
                                <path d="M10.6665 39.9999V23.9999H31.9998V11.0933L52.9065 31.9999L31.9998 52.9066V39.9999H10.6665Z" fill="black" />
                            </svg>
                        </h4>
                    </div>
                </a>
            </div>
            <div class="card">
                <div class="cardHead">
                    <h3>JUMLAH SAMPAH</h3>
                </div>
                <a href="jumlah_sampah.php">
                    <div class="cardFoot" id="sampah-tab">
                        <h4>Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 64 64" fill="none">
                                <path d="M10.6665 39.9999V23.9999H31.9998V11.0933L52.9065 31.9999L31.9998 52.9066V39.9999H10.6665Z" fill="black" />
                            </svg></h4>
                    </div>
                </a>
            </div>
        </span>
    </div>

</article>
<?php include 'foot.php' ?>