<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href='<?= base_url("assets/css/bootstrap.min.css") ?>'/>
	<!-- Animate CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<!-- style CSS-->
	<link href='<?= base_url("assets/css/style.css") ?>' rel="stylesheet">
	<!-- Carousel CSS-->
	<link href='<?= base_url("assets/css/carousel.css") ?>' rel="stylesheet">

	<title>Smart Unikom Tour</title>
</head>
<body>
<div id="container">
	<div id="section1" class="h-100">
		<div id="header">
			<div class="row" style="height: 100% !important; margin: 0px">
				<div class="col-md-6 header-left">
					<span class="title">SMART UNIKOM TOUR</span>
				</div>
				<div class="col-md-6 header-right">
					<div class="weather">
						<a class="weatherwidget-io" href="https://forecast7.com/en/n6d92107d63/bandung-city/"
						   data-mode="Current" data-days="3" data-theme="pure" data-basecolor="" data-accent="#ffffff"
						   data-textcolor="#ffffff" data-highcolor="#ffffff" data-lowcolor="#ffffff" data-suncolor="#ffffff"
						   data-mooncolor="#ffffff" data-cloudcolor="#ffffff" data-cloudfill="#ffffff"
						   data-raincolor="#ffffff" data-snowcolor="#ffffff">Bandung City, West Java, Indonesia</a>
						<script>
                            !function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = 'https://weatherwidget.io/js/widget.min.js';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, 'script', 'weatherwidget-io-js');
						</script>
					</div>
					<div class="vertical-line"></div>
					<div class="time-now">
						<span class="time">12:51 AM</span>
						<span class="date">11 November 2019</span>
					</div>
				</div>
			</div>
		</div>
		<div id="content"></div>
		<div id="footer">
			<div class="row" style="height: 100% !important; margin: 0px">
				<div class="col-md-4">
					<img class="footer-logo" src="<?= base_url() ?>assets/images/unikom_footer_logo.png"/>
				</div>
				<div class="col-md-8">
					<div class="scrollmenu menu-one animated fadeInLeft faster">
						<a class='beranda' href="#beranda">Beranda</a>
						<a class='tour' href="#tour">360 Tour</a>
						<a class='informasi-lantai' href="#informasi-lantai" onclick="showLantai()">Informasi Lantai</a>
						<a class='acara' href="#acara">Acara</a>
                        <a class='berita' href="#berita">Berita dan Artikel</a>
                        <a id="arrow-right" href="#arrow-right"><img src="<?= base_url() ?>assets/images/arrow-right.png"/></a>
					</div>
					<div class="scrollmenu menu-two animated fadeInRight faster">
						<a id="arrow-left" href="#arrow-left"><img src="<?= base_url() ?>assets/images/arrow_left.png"/></a>
						<a class='kalender' href="#kalender">Kalender Akademik</a>
						<a class='mobile' href="#versi-mobile">Versi Mobile</a>
						<a class='kritik' href="#kritik-saran">Kritik dan Saran</a>
						<a class='visi' href="#visi-misi">Visi Misi</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>


<!-- Modal -->
<!--<div class="modal fade" id="lantaiModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content modal-option">-->
<!--            <div id="container-lantai" class="h-100">-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='<?= base_url("assets/js/jquery-3.2.1.min.js") ?>'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
<script src='<?= base_url("assets/js/bootstrap.min.js") ?>'></script>
<script src='<?= base_url("assets/js/main.js") ?>'></script>
<script>
    function menuOpen(identity, menu) {
        console.log("<?php echo base_url(); ?>" + menu);
        $.ajax({
            url: "<?php echo base_url(); ?>" + menu,
            success: function (msg) {
                resetMenu();
                $("#content").html(msg);
                identity.addClass("active");
            }
        });
    }

    function showLantai() {
        window.document.location = "<?php echo base_url(); ?>lantai"
    }

    function setDateTime() {
        var today = new Date();
        $(".date").html(today.getDate()+'-'+(today.getUTCMonth()+1)+'-'+today.getFullYear());
        $(".time").html(today.getHours() + ":" + today.getMinutes());
	}

	setDateTime();

    //INIT MENU
    menuOpen($('.beranda'), "beranda");

    $('#myCarousel').carousel({
        interval: 3000,
    });

    //SET MENU
    $('.menu-two').toggle(false);
    $('#arrow-right').click(function () {
        $('.menu-one').toggle(false);
        $('.menu-two').toggle(true);
    });
    $('#arrow-left').click(function () {
        $('.menu-one').toggle(true);
        $('.menu-two').toggle(false);
    });

    //BERANDA
    $(".beranda").click(function () {
        menuOpen($(this), "beranda");
    });
    //TOUR
    $('.tour').click(function () {
        menuOpen($(this), "tour");
    });
    //INFORMASI LANTAI
    $('.informasi-lantai').click(function () {
        menuOpen($(this), "informasi-lantai");
    });
    //INFORMASI LANTAI
    $('.acara').click(function () {
        menuOpen($(this), "acara");
    });
    //BERITA ARTIKEL
    $('.berita').click(function () {
        menuOpen($(this), "berita");
    });
    //KALENDER
    $('.kalender').click(function () {
        menuOpen($(this), "kalender");
    });
    //VERSI MOBILE
    $('.mobile').click(function () {
        menuOpen($(this), "mobile");
    });
    //KRITIK SARAN
    $('.kritik').click(function () {
        menuOpen($(this), "kritik");
    });
    //VISI MISI
    $('.visi').click(function () {
        menuOpen($(this), "visi");
    });

    function resetMenu() {
        $('.beranda').removeClass("active");
        $('.tour').removeClass("active");
        $('.informasi-lantai').removeClass("active");
        $('.berita').removeClass("active");
        $('.kalender').removeClass("active");
        $('.mobile').removeClass("active");
        $('.kritik').removeClass("active");
        $('.visi').removeClass("active");
    }
</script>
</html>
