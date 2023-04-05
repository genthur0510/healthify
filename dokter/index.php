<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Healthify</title>
    <link rel="stylesheet" href="css/style_dokter.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <!-- Icon -->
    <link rel="icon" href="../vendor/img/h_logo.svg" sizes="20x20" type="imgae/png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <input type="checkbox" id="check">
    <!--header -->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Health</h3>
        </div>
        <div class="right_area">
            <a href="logout.php" class="logout_btn">Logout</a>
        </div>
    </header>
    <!--header akhir-->
    <!--navigasi mobile -->
    <div class="mobile_nav">
        <div class="nav_bar">
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="index.php"><i class="fas fa-home"></i><span>Dashboard</span></a>
            <a href="pasien.php"><i class="fas fa-user"></i><span>Data Pasien</span></a>
            <a href="katalog.php"><i class="fas fa-desktop"></i><span>Katalog Obat</span></a>
            <a href="profil.php"><i class="fas fa-edit"></i><span>Edit Akun</span></a>
        </div>
    </div>
    <!--navigasi mobile akhir-->
    <!--sidebar-->
    <div class="sidebar">
        <div class="profile_info">
            <h4> Selamat Datang Dokter</h4>
        </div>
        <a href="index.php"><i class="fas fa-home"></i><span>Dashboard</span></a>
        <a href="pasien.php"><i class="fas fa-user"></i><span>Data Pasien</span></a>
        <a href="katalog.php"><i class="fas fa-desktop"></i><span>Katalog Obat</span></a>
        <a href="profil.php"><i class="fas fa-edit"></i><span>Edit Akun</span></a>
    
    </div>
    <!--sidebar akhir-->

    <div class="content">
       
        <h1>Hallo, Selamat Datang Dokter</h1>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.nav_btn').click(function() {
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>

</body>

</html>