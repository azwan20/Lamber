<?php

include 'koneksi.php';

$sql = "SELECT * FROM form_nasabahs";
$result = $conn->query($sql);


?>

<style>
    .nasabah_all table td button {
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

<?php include 'head.php' ?>

<?php
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<article>
    <div class="nasabah_all">
        <span class="d-flex">
            <button>DATA NASABAH</button>
        </span>
        <span class="d-flex">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID NASBAH</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">JENSI KELAMIN</th>
                        <th scope="col">PEKERJAAN</th>
                        <th scope="col">NO TELPON</th>
                        <th scope="col">NO REKENING</th>
                        <th scope="col" colspan="3">AKSI</th>
                    </tr>
                </thead>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $idNas = $row["id_nasabah"];
                        $namaNas = $row["nama"];
                        $alamatNas = $row["alamat"];
                        $jkNas = $row["jenis_kelamin"];
                        $pekerjaanNas = $row["pekerjaan"];
                        $no_telpNas = $row["no_telp"];
                        $no_rekNas = $row["no_rek"];
                ?>
                        <tbody>
                            <tr>
                                <td style="display : none;"><?php echo $id ?></td>
                                <th scope="row"><?php echo $idNas ?></th>
                                <td><?php echo $namaNas ?></td>
                                <td><?php echo $alamatNas ?></td>
                                <td><?php echo $jkNas ?></td>
                                <td><?php echo $pekerjaanNas ?></td>
                                <td><?php echo $no_telpNas ?></td>
                                <td><?php echo $no_rekNas ?></td>
                                <td>
                                    <button id="isiData-tab" onclick="redirectToIsiData(<?php echo $idNas; ?>)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                            <path d="M9.625 23.3927L15.6929 23.3721L28.9369 10.2546C29.4566 9.73481 29.7426 9.04456 29.7426 8.31031C29.7426 7.57606 29.4566 6.88581 28.9369 6.36606L26.7561 4.1853C25.7166 3.1458 23.903 3.1513 22.8718 4.18118L9.625 17.3014V23.3927ZM24.8119 6.12956L26.9968 8.30618L24.8009 10.4814L22.6201 8.30206L24.8119 6.12956ZM12.375 18.4482L20.6662 10.2353L22.847 12.4161L14.5571 20.6262L12.375 20.6331V18.4482Z" fill="#699BF7" />
                                            <path d="M6.875 28.875H26.125C27.6416 28.875 28.875 27.6416 28.875 26.125V14.2065L26.125 16.9565V26.125H11.2172C11.1815 26.125 11.1444 26.1388 11.1086 26.1388C11.0633 26.1388 11.0179 26.1264 10.9711 26.125H6.875V6.875H16.2896L19.0396 4.125H6.875C5.35837 4.125 4.125 5.35837 4.125 6.875V26.125C4.125 27.6416 5.35837 28.875 6.875 28.875Z" fill="#699BF7" />
                                        </svg>
                                    </button>
                                </td>
                                <td>
                                    <button onclick="lihatData(<?php echo $idNas; ?>)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                            <path opacity="0.16" fill-rule="evenodd" clip-rule="evenodd" d="M15.5002 6.4585C9.47583 6.4585 4.65016 10.2082 2.5835 15.5002C4.65016 20.7921 9.47583 24.5418 15.5002 24.5418C21.5245 24.5418 26.3502 20.7921 28.4168 15.5002C26.3502 10.2082 21.5245 6.4585 15.5002 6.4585ZM15.5002 19.3752C16.5279 19.3752 17.5135 18.9669 18.2402 18.2402C18.9669 17.5135 19.3752 16.5279 19.3752 15.5002C19.3752 14.4724 18.9669 13.4868 18.2402 12.7601C17.5135 12.0334 16.5279 11.6252 15.5002 11.6252C14.4724 11.6252 13.4868 12.0334 12.7601 12.7601C12.0334 13.4868 11.6252 14.4724 11.6252 15.5002C11.6252 16.5279 12.0334 17.5135 12.7601 18.2402C13.4868 18.9669 14.4724 19.3752 15.5002 19.3752Z" fill="#699BF7" />
                                            <path d="M19.375 15.5C19.375 16.5277 18.9667 17.5133 18.24 18.24C17.5133 18.9667 16.5277 19.375 15.5 19.375C14.4723 19.375 13.4867 18.9667 12.76 18.24C12.0333 17.5133 11.625 16.5277 11.625 15.5C11.625 14.4723 12.0333 13.4867 12.76 12.76C13.4867 12.0333 14.4723 11.625 15.5 11.625C16.5277 11.625 17.5133 12.0333 18.24 12.76C18.9667 13.4867 19.375 14.4723 19.375 15.5Z" stroke="#699BF7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2.5835 15.5002C4.65016 10.2082 9.47583 6.4585 15.5002 6.4585C21.5245 6.4585 26.3502 10.2082 28.4168 15.5002C26.3502 20.7921 21.5245 24.5418 15.5002 24.5418C9.47583 24.5418 4.65016 20.7921 2.5835 15.5002Z" stroke="#699BF7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </td>
                                <td>
                                    <button onclick="deleteRow(<?php echo $idNas; ?>)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
                                            <path d="M10.7915 32.375C9.94359 32.375 9.21798 32.0733 8.61467 31.47C8.01136 30.8667 7.7092 30.1406 7.70817 29.2917V9.25H6.1665V6.16667H13.8748V4.625H23.1248V6.16667H30.8332V9.25H29.2915V29.2917C29.2915 30.1396 28.9899 30.8657 28.3865 31.47C27.7832 32.0744 27.0571 32.376 26.2082 32.375H10.7915ZM13.8748 26.2083H16.9582V12.3333H13.8748V26.2083ZM20.0415 26.2083H23.1248V12.3333H20.0415V26.2083Z" fill="#699BF7" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                    }
                } else {
                    ?>
                    <div class="infoItem">
                        <div class="infoIsi">
                            <img src="path_to_default_image.jpg" alt="Default Image" style="width: 100%;">
                        </div>
                        <p style="text-align: center;">Default Title</p>
                    </div>
                <?php
                }
                ?>
            </table>
        </span>
        <span class="d-flex back">
            <button>BACK</button>
        </span>
    </div>
</article>

<script>
    function deleteRow(id) {
        var confirmation = confirm("Anda yakin ingin menghapus baris ini?");
        if (confirmation) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "deleteRow.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    location.reload();
                }
            };
            xhr.send("id=" + id);
        }
    }

    function redirectToIsiData(id) {
        console.log('success');

        var url = id ? 'isi_data.php?id=' + id : 'isi_data.php';
        window.location.href = url;
    }

    function lihatData(idNas) {
        var url = 'tabungan_nasabah.php?idNasabah=' + idNas;
        window.location.href = url;
    }
</script>

<?php include 'foot.php' ?>