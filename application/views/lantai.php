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
    <link href='<?= base_url("assets/css/lantai.css") ?>' rel="stylesheet">
    <!-- FontAwasome CSS-->
    <link href='<?= base_url("assets/css/all.css") ?>' rel="stylesheet">
    <!-- Carousel CSS-->
    <link href='<?= base_url("assets/css/carousel.css") ?>' rel="stylesheet">

    <title>Smart Unikom Tour</title>
</head>
<body>
<div id="container">
    <div id="section1" class="h-100">
        <div id="header">
            <div class="row" style="height: 100% !important; margin: 0px; background-color: #FFFFFF">
                <div class="col-md-6 header-left">
                    <div class="row h-100">
                        <div class="col-2">
                            <a class="center-image" href="#arrow-left" onclick="backpress()"><img
                                        src="<?= base_url() ?>assets/images/arrow-left-black.png"/></a>
                        </div>
                        <div class="col-10">
                            <span class="title">SMART UNIKOM TOUR <br> INFORMASI LANTAI</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 header-right">
                    <form style="display: block; margin-top: 4%">
                        <div class="row">
                            <div class="col-5">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari ruangan..."
                                           aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"
                                                                                                   aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <select class="form-control" onchange="getLantai(this.value)">
                                    <option value="1">Lantai 1</option>
                                    <option value="2">Lantai 2</option>
                                    <option value="3">Lantai 3</option>
                                    <option value="4">Lantai 4</option>
                                    <option value="5">Lantai 5</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="row h-100 mx-5" style="padding: 20px">
                <div class="col-6 h-100 lantai-animate-1">
                    <div style="height: 25%">
                        <span class="title title-lantai">SMART UNIKOM TOUR <br> INFORMASI LANTAI</span>
                        <span class="title">Smart Building UNIKOM</span>
                    </div>
                    <img style="height: 75%" src="<?= base_url() ?>assets/images/lantai-img.png">
                </div>
                <div class="col-6 h-100 lantai-animate-2">
                    <center style="height: 15%;"><i class="fa fa-chevron-up" style="font-size: 50px; color: #276BCC;"
                                                    aria-hidden="true"></i></center>
                    <div style="height: 70%;overflow: hidden">
                        <div class="d-flex flex-column">
                            <div class="lantai-item shadow-sm">
                                <p class="lantai-item-title order-4">6013</p>
                                <p class="lantai-item-title-desc">Dosen Teknik Informatika</p>
                            </div>
                            <div class="lantai-item shadow-sm">
                                <p class="lantai-item-title order-4">6013</p>
                                <p class="lantai-item-title-desc">Dosen Teknik Informatika</p>
                            </div>
                            <div class="lantai-item shadow-sm">
                                <p class="lantai-item-title order-4">6013</p>
                                <p class="lantai-item-title-desc">Dosen Teknik Informatika</p>
                            </div>
                            <div class="lantai-item shadow-sm">
                                <p class="lantai-item-title order-4">6013</p>
                                <p class="lantai-item-title-desc">Dosen Teknik Informatika</p>
                            </div>
                            <div class="lantai-item shadow-sm">
                                <p class="lantai-item-title order-4">6013</p>
                                <p class="lantai-item-title-desc">Dosen Teknik Informatika</p>
                            </div>
                        </div>
                    </div>
                    <center style="height: 15%; margin-top: 30px;"><i class="fa fa-chevron-down" style="font-size: 50px; color: #276BCC;"
                                                    aria-hidden="true"></i></center>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='<?= base_url("assets/js/jquery-3.2.1.min.js") ?>'></script>
<script src='<?= base_url("assets/js/all.js") ?>'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src='<?= base_url("assets/js/bootstrap.min.js") ?>'></script>
<script src='<?= base_url("assets/js/main.js") ?>'></script>
<script>
    function getLantai(lantai = 1) {
        var url = "<?= base_url() ?>lantai/getLantai";
        console.log(url)
        $.ajax({
            url: url,
            data: {"lantai": lantai},
            dataType: "JSON",
            method: "POST",
            success: function (data) {
                $(".title-lantai").html(data.lantai)
                animateCSS('.lantai-animate-1', 'fadeIn')
                animateCSS('.lantai-animate-2', 'fadeIn')
            }
        });
    }

    function animateCSS(element, animationName, callback) {
        const node = document.querySelector(element)
        node.classList.add('animated', animationName)

        function handleAnimationEnd() {
            node.classList.remove('animated', animationName)
            node.removeEventListener('animationend', handleAnimationEnd)

            if (typeof callback === 'function') callback()
        }

        node.addEventListener('animationend', handleAnimationEnd)
    }

    function backpress() {
        window.history.back();
    }

    getLantai()
</script>
</html>
