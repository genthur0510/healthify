<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Healthify</title>
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_chat.css">
    <!-- plugin bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.css">
    <!-- icon web -->
    <link rel="icon" href="vendor/img/h_logo.svg " type="image/gif" sizes="16x16">
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
                            <a href="index.php">Beranda</a>
                        </li>
                        <li class="active"><a href="healthify.php">Healthify</a></li>
                        <li><a href="artikel.php">Artikel</a></li>
                        <li><a href="tim.php">Tim</a></li>
                        <li><a href="profil.php">Profil</a></li>
                        <li><a href="dokter/logout.php">Logout</a></li>
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


    
   <div class="wrapper">
        <div class="title">Healthify</div>
        <div class="box">
            <div class="item">
                <div class="icon">
                                   </div>
                <div class="msg">
                    <p>Hallo selamat datang, Aku Healthify</p>
                    <p>Bagaimana kabarmu?</p>
                </div>
            </div>
            <br clear="both">
            <div class="item right">
                <div class="msg">
                    <p>Kabar saya tidak baik, saya sakit perut</p>
                </div>
            </div>
        </div>
        
        <div class="typing-area">
            <div class="input-field">
                <input type="text" placeholder="Ketik pesan.." required>
                <button>Kirim</button>
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