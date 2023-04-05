<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Healthify</title>
    <link rel="stylesheet" href="css/style_dokter.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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
            <a href="profil.php"><<i class="fas fa-edit"></i><span>Edit Akun</span></a>
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
          <div class="" style="margin-top:20px">
        <center>
            <font size="6">Katalog Obat</font>
        </center>
        <hr>
        <br>
        <div class="row">
            <div class="col-sm-6 mb-3">
               <a href="#"><button class="btn btn-primary right">Tambah Data</button></a>
            </div>
          
            
        </div>
        <div class="table-responsive"><br />
            <table class="table table-striped jambo_table bulk_action" border="1">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>Nama Penyakit</th>
                        <th>Deskripsi</th>
                        <th>Gejala</th>
                        <th>Penyebab</th>
                        <th>Resep Obat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <td>O123</td>
                            <td>ISPA</td>
                            <td>ISPA adalah infeksi saluran pernafasan yang sangat mudah menular dan dapat dialami oleh siapa saja.</td>
                            <td>Infeksi saluran pernafasan yang menimbulkan batuk pilek disertai demam yang mudah menular dan dapat dialami oleh siapa saja terutama anak-anak dan lansia, Penderita sulit bernafas, Muntah-Muntah, Muncul suara bengek saat menghembuskan nafas</td>
                            <td>Penyebab ISPA adalah infeksi virus atau bakteri pada sakuran pernafasan walaupun lebih sering disebabkan ileh virus atau bakteri penyakit ISPA</td>
                            <td>Memperbanyak istirahat dan konsumsi air putih untuk menencerkan dahak.Berkumur dengan air hangat.Memposisikan kepala lebih tinggi ketka tidur.Mengonsumsi minuman lemon hangat atau madu untuk meredakan batuk</td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-sm"><i class="fas fa-edit">edit</i></a><br><br>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash">hapus</i></a>
                            </td>
                        </tr>
                            
                    <tr>
                        <td colspan="6">Tidak ada data.</td>
                    </tr>
                    
                <tbody>
            </table>
        </div>
    </div>
</body>
       

    <script type="text/javascript">
        $(document).ready(function() {
            $('.nav_btn').click(function() {
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>

</body>

</html>