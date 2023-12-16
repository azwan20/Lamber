<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
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
                    <a href="#">Admin</a>
                </span>
            </div>
        </nav>
    </div>
    <div class="d-flex contain">
        <aside>
            <span class="d-flex head">
                <img src="style/img/admin.svg" width="50px" height="50px" alt="admin">
                <span>
                    <h4>Admin</h4>
                    <p>adminbsulamber@gmail.com</p>
                </span>
            </span>
            <span class="items">
                <button class="d-flex link" onclick="setActiveLink(this)" id="dashboard-tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M12.5 25V17.5H17.5V25H23.75V15H27.5L15 3.75L2.5 15H6.25V25H12.5Z" fill="#F8F8F8" />
                    </svg>
                    <p onclick="location.reload()">Dashboard</p>
                </button>
                <button class="d-flex link" onclick="setActiveLink(this)" id="input-tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M3.75 16.25H6.25V13.75H3.75V16.25ZM3.75 21.25H6.25V18.75H3.75V21.25ZM3.75 11.25H6.25V8.75H3.75V11.25ZM8.75 16.25H26.25V13.75H8.75V16.25ZM8.75 21.25H26.25V18.75H8.75V21.25ZM8.75 8.75V11.25H26.25V8.75H8.75ZM3.75 16.25H6.25V13.75H3.75V16.25ZM3.75 21.25H6.25V18.75H3.75V21.25ZM3.75 11.25H6.25V8.75H3.75V11.25ZM8.75 16.25H26.25V13.75H8.75V16.25ZM8.75 21.25H26.25V18.75H8.75V21.25ZM8.75 8.75V11.25H26.25V8.75H8.75Z" fill="#F8F8F8" />
                    </svg>
                    <p>Input Data</p>
                </button>
                <button class="d-flex link" onclick="setActiveLink(this)" id="laporan-tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M17.5 2.5H7.5C6.83696 2.5 6.20107 2.76339 5.73223 3.23223C5.26339 3.70107 5 4.33696 5 5V25C5 25.663 5.26339 26.2989 5.73223 26.7678C6.20107 27.2366 6.83696 27.5 7.5 27.5H22.5C23.163 27.5 23.7989 27.2366 24.2678 26.7678C24.7366 26.2989 25 25.663 25 25V10L17.5 2.5ZM22.5 25H7.5V5H16.25V11.25H22.5V25Z" fill="#F8F8F8" />
                    </svg>
                    <p>Laporan</p>
                </button>
                <!-- <a href="logout.php"> -->
                <button class="d-flex link" onclick="setActiveLink(this)" id="logout-tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M3.75 26.25V3.75H15V6.25H6.25V23.75H15V26.25H3.75ZM20 21.25L18.2812 19.4375L21.4687 16.25H11.25V13.75H21.4687L18.2812 10.5625L20 8.75L26.25 15L20 21.25Z" fill="#F8F8F8" />
                    </svg>
                    <p>Logout</p>
                </button>
                <!-- </a> -->
            </span>
        </aside>
        <article>
            <div id="dashboard-content">
                <?php include 'dashboard.php' ?>
            </div>
            <div id="nasabah-content" style="display:none;">
                <?php include 'jumlah_nasabah.php' ?>
            </div>
            <div id="sampah-content" style="display:none;">
                <?php include 'jumlah_sampah.php' ?>
            </div>
            <div id="input-content" style="display:none;">
                <?php include 'data_nasabah.php' ?>
            </div>
            <div id="data-content" style="display:none;">
                <?php include 'nasabah_all.php' ?>
            </div>
            <div id="isiData-content" style="display:none;">
                <?php include 'isi_data.php' ?>
            </div>
            <div id="formSampah-content" style="display:none;">
                <?php include 'tabungan_nasabah.php' ?>
            </div>
            <div id="laporan-content" style="display:none;">
                <?php include 'tabungan_nasabah.php' ?>
            </div>
            <div id="logout-content" style="display:none;">
                <?php include 'calendars.php' ?>
            </div>
        </article>
    </div>
    <script>
        function setActiveLink(element) {
            var buttons = document.querySelectorAll('.items button');
            buttons.forEach(function(button) {
                button.classList.remove('active');
            });

            element.classList.add('active');

            // Store the active tab ID in session storage
            sessionStorage.setItem('activeTab', element.id);
        }


        document.addEventListener('DOMContentLoaded', function() {
            const homeTab = document.getElementById('dashboard-tab');
            const informationTab = document.getElementById('input-tab');
            const contentTab = document.getElementById('laporan-tab');
            const calendarTab = document.getElementById('logout-tab');
            const nasabahTab = document.getElementById('nasabah-tab');
            const sampahTab = document.getElementById('sampah-tab');
            const dataTab = document.getElementById('data-tab');
            const isiDataTab = document.getElementById('isiData-tab');
            const formSampahTab = document.getElementById('formSampah-tab');

            const homeContent = document.getElementById('dashboard-content');
            const informationContent = document.getElementById('input-content');
            const contentContent = document.getElementById('laporan-content');
            const calendarContent = document.getElementById('logout-content');
            const nasabahContent = document.getElementById('nasabah-content');
            const sampahContent = document.getElementById('sampah-content');
            const dataContent = document.getElementById('data-content');
            const isiDataContent = document.getElementById('isiData-content');
            const formSampahaContent = document.getElementById('formSampah-content');

            function showDashboard() {
                homeContent.style.display = 'block';
                informationContent.style.display = 'none';
                calendarContent.style.display = 'none';
                contentContent.style.display = 'none';
                calculatorContent.style.display = 'none';
                nasabahContent.style.display = 'none';
                sampahContent.style.display = 'none';
                dataContent.style.display = 'none';
                isiDataContent.style.display = 'none';
                formSampahaContent.style.display = 'none';
            }

            function showNasabah() {
                homeContent.style.display = 'none';
                nasabahContent.style.display = 'block';
                informationContent.style.display = 'none';
                calendarContent.style.display = 'none';
                contentContent.style.display = 'none';
                calculatorContent.style.display = 'none';
                sampahContent.style.display = 'none';
                dataContent.style.display = 'none';
                isiDataContent.style.display = 'none';
                formSampahaContent.style.display = 'none';
            }

            function showSampah() {
                homeContent.style.display = 'none';
                nasabahContent.style.display = 'none';
                sampahContent.style.display = 'block';
                informationContent.style.display = 'none';
                calendarContent.style.display = 'none';
                contentContent.style.display = 'none';
                calculatorContent.style.display = 'none';
                dataContent.style.display = 'none';
                isiDataContent.style.display = 'none';
                formSampahaContent.style.display = 'none';
            }

            function showInput() {
                homeContent.style.display = 'none';
                informationContent.style.display = 'block';
                contentContent.style.display = 'none';
                calendarContent.style.display = 'none';
                calculatorContent.style.display = 'none';
                nasabahContent.style.display = 'none';
                sampahContent.style.display = 'none';
                dataContent.style.display = 'none';
                isiDataContent.style.display = 'none';
                formSampahaContent.style.display = 'none';
            }

            function showData() {
                homeContent.style.display = 'none';
                informationContent.style.display = 'none';
                dataContent.style.display = 'block';
                contentContent.style.display = 'none';
                calendarContent.style.display = 'none';
                calculatorContent.style.display = 'none';
                nasabahContent.style.display = 'none';
                sampahContent.style.display = 'none';
                isiDataContent.style.display = 'none';
                formSampahaContent.style.display = 'none';
            }

            function showIsiData() {
                homeContent.style.display = 'none';
                informationContent.style.display = 'none';
                dataContent.style.display = 'none';
                isiDataContent.style.display = 'block';
                contentContent.style.display = 'none';
                calendarContent.style.display = 'none';
                calculatorContent.style.display = 'none';
                nasabahContent.style.display = 'none';
                sampahContent.style.display = 'none';
                formSampahaContent.style.display = 'none';
            }

            function showFormSampah() {
                homeContent.style.display = 'none';
                informationContent.style.display = 'none';
                dataContent.style.display = 'none';
                isiDataContent.style.display = 'none';
                formSampahaContent.style.display = 'block';
                contentContent.style.display = 'none';
                calendarContent.style.display = 'none';
                calculatorContent.style.display = 'none';
                nasabahContent.style.display = 'none';
                sampahContent.style.display = 'none';
            }

            function showLaporan() {
                homeContent.style.display = 'none';
                informationContent.style.display = 'none';
                contentContent.style.display = 'block';
                calendarContent.style.display = 'none';
                calculatorContent.style.display = 'none';
                nasabahContent.style.display = 'none';
                sampahContent.style.display = 'none';
                dataContent.style.display = 'none';
                isiDataContent.style.display = 'none';
                formSampahaContent.style.display = 'none';
            }

            function showLogout() {
                informationContent.style.display = 'none';
                contentContent.style.display = 'none';
                homeContent.style.display = 'none';
                calendarContent.style.display = 'block';
                calculatorContent.style.display = 'none';
                nasabahContent.style.display = 'none';
                sampahContent.style.display = 'none';
                dataContent.style.display = 'none';
                isiDataContent.style.display = 'none';
                formSampahaContent.style.display = 'none';
            }

            homeTab.addEventListener('click', showDashboard);
            nasabahTab.addEventListener('click', showNasabah);
            sampahTab.addEventListener('click', showSampah);
            informationTab.addEventListener('click', showInput);
            dataTab.addEventListener('click', showData);
            isiDataTab.addEventListener('click', showIsiData);
            formSampahTab.addEventListener('click', showFormSampah);
            contentTab.addEventListener('click', showLaporan);
            calendarTab.addEventListener('click', showLogout);

            var storedActiveTab = sessionStorage.getItem('activeTab');

            // If there is a stored active tab, trigger a click event on that tab
            if (storedActiveTab) {
                var storedTab = document.getElementById(storedActiveTab);
                if (storedTab) {
                    storedTab.click();
                }
            } else {
                // If there is no stored active tab, show the default tab (Dashboard)
                homeTab.click();
            }
        });
    </script>
</body>

</html>