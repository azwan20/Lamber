<?php

include 'koneksi.php';

session_start();

if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM registrasi WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION["login"] = true;
        $_SESSION["id"] = $row['id'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = true;
    }
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
    <div class="login d-flex">
        <div class="containerLog">
            <div class="loginItem d-flex">
                <div class="d-flex left">
                    <div class="d-flex">
                        <img src="style/img/admin.svg" width="270px" height="270px" alt="admin" style="margin: auto;">
                    </div>

                </div>
                <div class="right">
                    <h1>Login</h1>
                    <form method="post">
                        <span class="d-flex">
                            <input type="text" placeholder="Username" name="username"> <br>
                            <input type="password" placeholder="Password" name="password">
                            <p>belum punya akun? <a href="registrasi.php">klik di sini</a></p>
                        </span>
                        <span class="d-flex">
                            <button type="submit" name="submit" style="color: #000;">LOGIN</button>
                        </span>
                    </form>
                    <?php if (isset($error)) { ?>
                        <p style="color: red; text-align: center;">Login gagal. Periksa kembali username dan password.</p>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>