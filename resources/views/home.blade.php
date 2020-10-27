@extends('layout.app')

@section('title')
Home
@endsection

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Viga&display=swap" rel="stylesheet">

<div class="jumbotron jumbotron-fluid" id="home">
    <div class="container">
        <h1 class="display-4">At the touch of <span>love</span><br>everyone becomes a <span>poet</span>.</h1>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-2 info-panel">
            <div class="row">
                <div class="col-lg">
                    <h4>Our Work</h4>
                    <a href=""><img src="storage/images/love.png" alt="love"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial -->
    <section class="testimonial">
        <div class="row justify-content-center">
            <div class="col-8 caption">
                <h5 class="aktif">" Berkerja dengan suasana hati yang lebih asik
                    dan mempelajari banyak hal baru stiap harinya. "
                </h5>

                <h5 class="sub-kanan">" Berkerja Berkerja Berkerja Berkerja yang lebih asik
                    Berkerja hal baru Berkerja Berkerja "
                </h5>

                <h5 class="sub-kiri">" mempelajari dengan mempelajari mempelajari asik
                    dan mempelajari mempelajari hal mempelajari "
                </h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 justify-content-center d-flex">
                <figure class="figure">
                    <img src="/storage/slider/gbr1.png" class="figure-img img-fluid rounded-circle" alt="testi1">
                    <figcaption class="figure-caption sub">bbabbbii</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/storage/slider/gbr2.png" class="figure-img img-fluid rounded-circle aktif" alt="testi2">
                    <figcaption class="figure-caption main">Aisaaaaaaaaa</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/storage/slider/gbr3.png" class="figure-img img-fluid rounded-circle" alt="testi3">
                    <figcaption class="figure-caption sub">kuddaaaaaaaa</figcaption>
                </figure>
            </div>
        </div>
    </section>
    <!--END testimonial -->
    <div class="row" id="contact-us">
        <div class="col-lg-6 justify-content-center">
            <div class="location">
                <h1 class="text-center">Location</h1>
                <p>Pabuaran Residence</p>
                <p class="up">Jl. Subandi Blok. B1 No. 7, Tangerang</p>
                <p><iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63464.05147205941!2d106.58531110463858!3d-6.197142151456799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff276d31fd33%3A0xcbf18c04f7263f51!2sKomplek%20Pabuaran%20Residence!5e0!3m2!1sid!2sid!4v1603561289250!5m2!1sid!2sid" frameborder="1" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="contact">
                <h1 class=" text-center">Contact Us</h1>
                <div class="sosmed wa d-flex justify-content-center">
                    <a href='https://api.whatsapp.com/send/?phone=628788957799&text&app_absent=0'>
                        <img src="/storage/sosmed/waa.png" alt="wa"> </a>
                    <h2>+62 878 8957799</h2>
                </div>
                <div class="sosmed ig d-flex justify-content-center">
                    <a href='https://www.instagram.com/raynaldigs/'>
                        <img src="/storage/sosmed/igg.png" alt="ig"></a>
                    <h2>@raynaldigs</h2>
                </div>
                <div class="sosmed mail d-flex justify-content-center">
                    <a href='mailto:ginantaraaldi1387@gmail.com'>
                        <img src="/storage/sosmed/mail.png" alt="mail"></a>
                    <h2>ginantaraaldi1387@gmail.com</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="row footer">
        <div class="col text-center">
            <p>2020 All Right Reserved by GS</p>
        </div>
    </div>
    <!--END footer -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</div>

<script>
    $(document).ready(function() {
        $('.figure').on('click', function() {
            var clicked = $(this).children('img').attr('src');
            var main = $('.figure').children('.aktif').attr('src');

            var clickedNama = $(this).children('.figure-caption').text();
            var nama = $('.figure').children('.main').text();

            var x = $(this).children('img').attr('alt');
            if (x == 'testi1') {
                var clickedCaps = $('.caption').children('.sub-kiri').text();
            } else if (x == 'testi2') {
                var clickedCaps = $('.caption').children('.aktif').text();
            } else {
                var clickedCaps = $('.caption').children('.sub-kanan').text();
            }
            var caps = $('.caption').children('.aktif').text();

            $(this).children('img').attr('src', main);
            $('.figure').children('.aktif').attr('src', clicked);

            $(this).children('.figure-caption').text(nama);
            $('.figure').children('.main').text(clickedNama);

            $('.caption').children('.aktif').text(clickedCaps);
            if (x == 'testi1') {
                $('.caption').children('.sub-kiri').text(caps);
            } else if (x == 'testi2') {
                $('.caption').children('.aktif').text(caps);
            } else {
                $('.caption').children('.sub-kanan').text(caps);
            }
        });

        // $('.sosmed img').mouseenter(function() {
        //     var x = '.' + $(this).attr('alt');
        //     $(x).children('h2').attr('style', 'display: block !important');
        // });

        // $('.sosmed img').mouseleave(function() {
        //     var x = '.' + $(this).attr('alt');
        //     $(x).children('h2').attr('style', 'display: none !important');
        // });

        $('.sosmed').mouseenter(function() {
            var x = '.' + $(this).children('a').children('img').attr('alt');
            $(x).children('h2').attr('style', 'display: block !important');
        });

        $('.sosmed').mouseleave(function() {
            var x = '.' + $(this).children('a').children('img').attr('alt');
            $(x).children('h2').attr('style', 'display: none !important');
        });
    });


    var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
@endsection