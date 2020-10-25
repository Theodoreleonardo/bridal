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
            <div class="col-8">
                <h5>" Berkerja dengan suasana hati yang lebih asik
                    dan mempelajari banyak hal baru stiap harinya. "
                </h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 justify-content-center d-flex">
                <figure class="figure">
                    <img src="/storage/slider/gbr1.png" class="figure-img img-fluid rounded-circle" alt="testi1">
                </figure>
                <figure class="figure">
                    <img src="/storage/slider/gbr2.png" class="figure-img img-fluid rounded-circle aktif" alt="testi2">
                    <figcaption class="figure-caption">Aisaaaaaaaaa</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/storage/slider/gbr3.png" class="figure-img img-fluid rounded-circle" alt="testi3">
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
                <p>Jl. Subandi Blok. B1 No. 7, Tangerang</p>
                <p><iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63464.05147205941!2d106.58531110463858!3d-6.197142151456799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff276d31fd33%3A0xcbf18c04f7263f51!2sKomplek%20Pabuaran%20Residence!5e0!3m2!1sid!2sid!4v1603561289250!5m2!1sid!2sid" frameborder="1" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="contact">
                <h1 class=" text-center">Contact Us</h1>
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
    //Get the button
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