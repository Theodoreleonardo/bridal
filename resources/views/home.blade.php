@extends('layout.app')

@section('title')
Home
@endsection

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Viga&display=swap" rel="stylesheet">

<div class="jumbotron jumbotron-fluid">
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
                    <figcaption class="figure-caption">Aisaaaa</figcaption>
                </figure>
                <figure class="figure">
                    <img src="/storage/slider/gbr3.png" class="figure-img img-fluid rounded-circle" alt="testi3">
                </figure>
            </div>
        </div>
    </section>
</div>
<!--END testimonial -->
<div class="row" id="contact-us">

    <div class="col-6">
        <div class="location">
            <h1 class="text-center">Location</h1>
        </div>
    </div>
    <div class="col-6">
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

@endsection