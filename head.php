
<?php 
include 'koneksi.php';
session_start();


$idLogin = $_SESSION['id'];

$sqlHead = "SELECT * FROM registrasi WHERE id = '$idLogin'";
$resultHead = $conn->query($sqlHead);

if ($resultHead->num_rows > 0) {
    $rowHead = $resultHead->fetch_assoc();
    // $idLog = $row["id"];
    $usernames = $rowHead["username"];
    $email = $rowHead["email"];
} else {
    $usernames = "Default";
    $email = "Default";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <!-- bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div>
        <nav class="navbar" style="padding-top: 0px;">
            <div class="container-fluid" style="padding: 0px;">
                <span class="d-flex navbar-brand">
                    <a style="color: #fff; font-size: 24px;">BSU LAMBER ADMINISTRATOR</a>
                </span>
                <span>
                    <img src="style/img/admin.svg" width="50px" height="50px" alt="admin">
                    <a href="#"><?php echo $usernames; ?></a>
                </span>
            </div>
        </nav>
    </div>
    <div class="d-flex contain">
        <aside>
            <span class="d-flex head">
                <img src="style/img/admin.svg" width="50px" height="50px" alt="admin">
                <span>
                    <h4><?php echo $usernames; ?></h4>
                    <p><?php echo $email; ?></p>
                </span>
            </span>
            <span class="items">
                <a href="dashboard.php">
                    <button class="d-flex link" onclick="setActiveLink(this)" id="dashboard-tab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M12.5 25V17.5H17.5V25H23.75V15H27.5L15 3.75L2.5 15H6.25V25H12.5Z" fill="#F8F8F8" />
                        </svg>
                        <p onclick="location.reload()">Dashboard</p>
                    </button>
                </a>
                <a href="data_nasabah.php">
                    <button class="d-flex link" onclick="setActiveLink(this)" id="input-tab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M3.75 16.25H6.25V13.75H3.75V16.25ZM3.75 21.25H6.25V18.75H3.75V21.25ZM3.75 11.25H6.25V8.75H3.75V11.25ZM8.75 16.25H26.25V13.75H8.75V16.25ZM8.75 21.25H26.25V18.75H8.75V21.25ZM8.75 8.75V11.25H26.25V8.75H8.75ZM3.75 16.25H6.25V13.75H3.75V16.25ZM3.75 21.25H6.25V18.75H3.75V21.25ZM3.75 11.25H6.25V8.75H3.75V11.25ZM8.75 16.25H26.25V13.75H8.75V16.25ZM8.75 21.25H26.25V18.75H8.75V21.25ZM8.75 8.75V11.25H26.25V8.75H8.75Z" fill="#F8F8F8" />
                        </svg>
                        <p>Input Data</p>
                    </button>
                </a>
                <a href="nasabah_all.php">
                    <button class="d-flex link" onclick="setActiveLink(this)" id="laporan-tab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M17.5 2.5H7.5C6.83696 2.5 6.20107 2.76339 5.73223 3.23223C5.26339 3.70107 5 4.33696 5 5V25C5 25.663 5.26339 26.2989 5.73223 26.7678C6.20107 27.2366 6.83696 27.5 7.5 27.5H22.5C23.163 27.5 23.7989 27.2366 24.2678 26.7678C24.7366 26.2989 25 25.663 25 25V10L17.5 2.5ZM22.5 25H7.5V5H16.25V11.25H22.5V25Z" fill="#F8F8F8" />
                        </svg>
                        <p>Laporan</p>
                    </button>
                </a>
                <a href="logout.php">
                    <button class="d-flex link" onclick="setActiveLink(this)" id="logout-tab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M3.75 26.25V3.75H15V6.25H6.25V23.75H15V26.25H3.75ZM20 21.25L18.2812 19.4375L21.4687 16.25H11.25V13.75H21.4687L18.2812 10.5625L20 8.75L26.25 15L20 21.25Z" fill="#F8F8F8" />
                        </svg>
                        <p>Logout</p>
                    </button>
                </a>
            </span>
        </aside>
