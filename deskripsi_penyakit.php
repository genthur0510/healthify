
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Healhify-Desk</title>
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styledies.css">
    <!-- plugin bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.css">
   
    <!-- icon web -->
    <link rel="icon" href="vendor/img/caredoc_sOg_icon.ico" type="image/gif" sizes="16x16">
    <!-- font averia -->
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <!-- header -->
    <header class="header-area" id="page-top">
        <!-- site-navbar start -->
        <div class="navbar-area">
            <div class="container">
                <nav class="site-navbar">
                    <!-- site logo -->
                    <div class="content-image">
                        <img src="vendor/img/h_logo.svg" alt="healthify-logo">
                    </div>
                    <!-- site menu/nav -->
                    <ul class="menu" id="menu">
                        <li>
                            <a href="index.php" >Beranda</a>
                        </li>
                        <li><a href="healthify.php">Healthify</a></li>
                        <li><a href="artikel.php">Artikel</a></li>
                        <li><a href="tim/tim.php">Tim</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                    <!-- nav-toggler for mobile version only -->
                    <button class="nav-toggler">
                        <span></span>
                    </button>
                </nav>
            </div>
        </div>
    </header>
    <!-- akhir header -->


        <!-- konten -->
        <div class="container-fluid p-6">
            <div class="row">
               
                    <div class="col-sm-12">
                        <div class="card2 sdh">
                            <div class="card-body" id="textdies">
                                <h5 class="ts">ISPA</h5>
                                <p class="card-text">
                                   - Deskripsi <br>

                                   ISPA adalah infeksi saluran pernafasan yang sangat mudah menular dan dapat dialami oleh siapa saja.
                                </p>
                                <p class="card-text">
                                    -Gejala<br>
                                    Infeksi saluran pernafasan yang menimbulkan batuk pilek disertai demam yang mudah menular dan dapat dialami oleh siapa saja terutama anak-anak dan lansia, Penderita sulit bernafas, Muntah-Muntah, Muncul suara bengek saat menghembuskan nafas
                                    <p>
                                        -Penyebab<br>
                                        Penyebab ISPA adalah infeksi virus atau bakteri pada sakuran pernafasan walaupun lebih sering disebabkan ileh virus atau bakteri penyakit ISPA
                                    </p>

                                    <p class="card-text" id>
                                        -Cara mengobati<br>
                                            Memperbanyak istirahat dan konsumsi air putih untuk menencerkan dahak.Berkumur dengan air hangat.Memposisikan kepala lebih tinggi ketka tidur.Mengonsumsi minuman lemon hangat atau madu untuk meredakan batuk
                                    </p>
                                    <div class="modal-footer">
                                        <button type="button" onclick="play();" class="btn btn-primary">Play</button>
                                        <button type="button" onclick="stop();" class="btn btn-primary">Stop</button>
                                    </div>
                            </div>
                        </div>
                        <p class="note text-danger">catatan: "fitur suara hanya dapat berjalan pada browser chrome!"</p>
                    </div>
              
            </div>
        </div>
       

        <!-- footer -->
    <div class="footer-section" id="footer">
        <div class="container pd-5">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                        <div class="footer-logo">
                            
                            <a href="http://cs.upi.edu/v2/home" target="blank"><img src="vendor/img/upi.png"></a>
                          
                        </div>
                        <h6>Jl. Pendidikan No.15, Cibiru Wetan, Kec. Cileunyi, Kabupaten Bandung, Jawa Barat 40625 </h6>
                        <p></p>
                        <h6>(022) 7801840<span>|</span>(022) 7801840</h6>
                        <div class="contact-social">
                            <ul>
                                <li><a class="hover-target" target="blank" href="https://www.facebook.com//"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="hover-target" target="blank" href="mailto:info@"><i class="far fa-envelope"></i></a></li>
                                <li><a class="hover-target" target="blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></i></a></li>
                                <li><a class="hover-target" target="blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></i></a></li>
                                <li><a class="hover-target" target="blank" href="https://wa.me/0261-202767"><i class="fab fa-whatsapp"></i></i></a></li>
                            </ul>
                        </div>
                        <span>Copyright © Healthify <?= date('Y') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir footer -->

</body>
<!-- voice -->
<script src="js/textvoice.js"></script>
<script src="js/voicetext.js"></script>
<!-- navbar checked di responsive -->
<script src="js/nav.js"></script>
<!-- responsive voice -->
<script src="https://code.responsivevoice.org/responsivevoice.js?key=6tgcyWyA"></script>
<script>
    AOS.init();
</script>

</html>