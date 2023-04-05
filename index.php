<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Healthify</title>
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loader.css">
    <!-- plugin bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.css">
    <!-- icon web -->
    <link rel="icon" href="vendor/img/h_logo.svg " type="image/gif" sizes="16x16">
</head>

<body>

    <!-- animasi loading -->
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- akhir animasi loading -->

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
                        <li class="active">
                            <a href="index.php" class="scroll">Beranda</a>
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


    <!-- landing page -->
    <div class="landing">
        <div class="landingText">
            <h2>Hidup Sehat</span> </h2>
            <h3>Bersama Kami.</h3> 
            <div class="btn">
                <a href="#about" class="scroll">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="landingImage">
            <img src="vendor/img/dash.png" alt="">
        </div>
    </div>
    <!-- akhir landing page -->


    <!-- about -->
    <section class="section">
        <div class="about" id="about">
            <div class="content-about">
                <h3 class="title-about">
                    Tentang Aplikasi Ini
                    <div class="line"></div>
                </h3>
                <p class="text-about">Merupakan sebuah website yang bisa digunakan untuk masyarakat yang memerlukan
                    informasi kesehatan secara efesien,
                    website ini dapat mengetahui daftar penyakit-penyakit, memberikan informasi bagaimana cara untuk
                    mencegah dan mengatasi
                    penyakit tersebut. Tampilan yang sederhana akan memudahkan pengguna untuk berinteraksi dengan
                    website ini, di dalamnya
                    pengguna dimanjakan dengan system voice dan edukasi animasi robot sederhana yang berfungsi untuk
                    interaksi antara system
                    dan pengguna sehinga pengguna tidak merasa jenuh dan merasa kesulitan pada saat mengakses website.
                    Website ini cocok
                    digunakan untuk semua kalangan.</p>
            </div>
            <div class="imgContainer">
                <img src="vendor/img/medl.png" alt="">
            </div>
        </div>
    </section>
    <!-- akhir about -->


    <!-- bagaimana ini bekerja? -->
    <div class="container my-5">
        <div class="text-center mb-5">
            <span class="text-secondary">Langkah</span>
            <h4 class="text-capitalize font-weight-bold">Bagaimana ini <span style="color: #0089ff">Bekerja?</span></h4>
        </div>

        <div class="col-12 col-md-8 mx-auto">

            <div class="d-flex my-4 align-items-start">
                <div class="mr-3 text-center mt-2">
                    <div class="p-4 ml-2 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #0089ff">1</div>
                </div>
                <div class="rounded bg-light p-4">
                    <h5 class="mb-3" style="font-weight: 600;">Apa yang anda rasakan?</h5>
                    <p class="text-secondary font-weight-light">Kenali keluhan yang anda rasakan,lalu sampaikan keluhan yang anda rasakan kepada healtify.</p>
                </div>
            </div>
            <div class="d-flex my-4 align-items-start">
                <div class="mr-3 text-center mt-2">
                    <div class="p-4 ml-2 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #0089ff">2</div>
                </div>
                <div class="rounded bg-light p-4">
                    <h5 class="mb-3" style="font-weight: 600;">Konsultasikan keluhan anda pada healtify</h5>
                    <p class="text-secondary font-weight-light">Dengan mengkonsultasikan apa yang anda rasakan kepada healtify anda akan mendapatkan informasi keluhan yang dirasakan.</p>
                </div>
            </div>
            <div class="d-flex my-4 align-items-start">
                <div class="mr-3 text-center mt-2">
                    <div class="p-4 ml-2 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #0089ff">3</div>
                </div>
                <div class="rounded bg-light p-4">
                    <h5 class="mb-3" style="font-weight: 600;">Dapatkan informasi kesehatan</h5>
                    <p class="text-secondary font-weight-light">Anda mendapatkan solusi terhadap keluhan yang dirasakan sehingga merasa dekat dengan kesembuhan setelah mendapatkan informasi.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir bagaimana ini bekerja? -->

    <!-- caredoc -->
    <div class="container-caredoc" id="caredoc">
        <div class="content-caredoc">
            <div class="title-caredoc">
                <h3>Healthi<span>fy</span></h3>
            </div>
            <div class="d-flex justify-content-center">
                <img src="vendor/img/h.gif" alt="healthify">
            </div>
            <div class="container-form">
                <form action="daftar_penyakit.php" method="get" id="search-form">
                    <div class="input-group mb-3">
                        <input id="textbox" name="q" type="text" placeholder="Masukan apa yang anda rasakan..." autocomplete="off" required>
                        <div class="input-group-append">
                            <!-- <button type="submit" class="d-none"></button> -->
                            <button type="button" class="btn btn-light btn-lg mr-1" id="start-btn" title="Start">
                                <i class="fas fa-microphone" id="micoff"></i>
                                <i class="fa fa-assistive-listening-systems d-none" id="micon" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="info"></p>
            </div>
        </div>
    </div>
    <!-- akhir Healthify -->

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
<!-- responsive voice -->
<script src="https://code.responsivevoice.org/responsivevoice.js?key=6tgcyWyA"></script>
<!-- voice -->
<script src="js/textvoice.js"></script>
<!-- navbar checked di responsive -->
<script src="js/nav.js"></script>
<!-- smooth scroll on klik -->
<!-- navbar aktif di section -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- voice to text -->
<script type="text/javascript">
    var SpeechRecognition = window.webkitSpeechRecognition;

    var recognition = new SpeechRecognition();


    recognition.continuous = false;
    recognition.lang = 'en-US';
    recognition.interimResults = false;
    recognition.maxAlternatives = 1;


    recognition.lang = "id-ID";

    var Textbox = $('#textbox');
    var instructions = '';

    var Content = '';

    recognition.continuous = false;

    recognition.onresult = function(event) {

        var current = event.resultIndex;

        var transcript = event.results[current][0].transcript;

        Content += transcript;
        Textbox.val(Content);
        console.log(transcript);

    };

    recognition.onstart = function() {
        $('#micoff').addClass('d-none');
        $('#micon').removeClass('d-none');
        instructions.text('Voice recognition is ON.');
    }

    recognition.onspeechend = function() {
        instructions.text('No activity.');
    }

    recognition.onerror = function(event) {
        if (event.error == 'no-speech') {
            instructions.text('Try again.');
        }
    }
    recognition.onend = function() {
        $('#micoff').removeClass('d-none');
        $('#micon').addClass('d-none');
        if (Textbox.val() !== '') {
            $('#search-form').submit();
        }
    };
    $('#start-btn').on('click', function(e) {
        if (Content.length) {
            Content += ' ';
        }
        recognition.start();
        console.log(responsiveVoice.isPlaying());
    });

    Textbox.on('input', function() {
        Content = $(this).val();
    });
</script>
<!-- smooth scroll jquery-->
<script>
    $(document).ready(function() {

        var scrollLink = $('.scroll');

        // Smooth scrolling
        scrollLink.click(function(e) {
            e.preventDefault();
            $('body,html').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });

        // Active link switching
        $(window).scroll(function() {
            var scrollbarLocation = $(this).scrollTop();

            scrollLink.each(function() {

                var sectionOffset = $(this.hash).offset().top - 20;

                if (sectionOffset <= scrollbarLocation) {
                    $(this).parent().addClass('active');
                    $(this).parent().siblings().removeClass('active');
                }
            })

        })

    })
</script>

<!-- js untuk loading -->
<script type="text/javascript">
    setTimeout(function() {
        $('.loader').fadeToggle();
    }, 200);
</script>

</html>