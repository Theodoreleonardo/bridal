@extends('layout.app')
@section('title')
Testimonial
@endsection

<link rel="stylesheet" href="{{ asset('css/testi.css') }}">
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="storage/slider/ntr1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="storage/slider/ntr2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="storage/slider/ntr3.jpg" alt="Third slide">
        </div>
    </div>
</div>
<h1 class="display-4">At the touch of <span>love</span><br>everyone becomes a <span>poet</span>.</h1>
<div class="image-gallery">
    <a href="storage/slider/ntr1.jpg" data-lightbox="example-set" data-title="mermaid"><img class="example-image mermaid" src="storage/slider/ntr1.jpg" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr1.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image mermaid" src="storage/slider/gbr1.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr1.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image mermaid" src="storage/slider/gbr1.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr1.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image mermaid" src="storage/slider/gbr1.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script src="{{ asset('lightbox2/dist/js/lightbox.min.js') }}"></script>
<script>
    $(document).ready(function() {
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'disableScrolling': true,
            'positionFromTop': 10,
            'alwaysShowNavOnTouchDevices': true
        })
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