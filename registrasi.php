<?php

include 'koneksi.php';

session_start();

if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameReg = $_POST['username'];
    $emailReg = $_POST['email'];
    $passwordReg = $_POST['password'];

    $hashedPassword = password_hash($passwordReg, PASSWORD_DEFAULT);

    $sql6 = "insert into registrasi  (username, email, password) VALUES ('$usernameReg', '$emailReg', '$passwordReg')";
    if(mysqli_query($conn, $sql6)){
        echo "Data berhasil disimpan";
        header("Location: login.php");
    } else {
        echo "Error: " . $sql6 . "<br>" . mysqli_error($conn);
    }
}
$conn->close();
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
    <style>
        .right input{
            margin: 5px;
        }
        .right button{
            color: #000;
        }
    </style>
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
                    <h1>REGISTRASI</h1>
                    <form method="post" action="">
                        <span class="d-flex">
                            <input type="text" placeholder="Username" name="username"> <br>
                            <input type="email" placeholder="email" name="email"> <br>
                            <input type="password" placeholder="Password" name="password">
                        </span>
                        <span class="d-flex">
                            <button type="submit" name="submit">LOGIN</button>
                        </span>
                    </form>
                    <?php if (isset($error)) { ?>
                        <p style="color: red; text-align: center;">Registrasi gagal. Periksa Kembali inputan anda.</p>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
