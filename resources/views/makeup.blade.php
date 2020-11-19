@extends('layout.app')
@section('title')
MakeUp
@endsection

<link rel="stylesheet" href="{{ asset('css/makeup.css') }}">
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
<nav class="menu" id="menu">
    <ul class="menu-list">
        <li class="contentss"><a id="1" href="#menu">Wedding</a></li>
        <li class="contentss"><a id="2" href="#menu">Party</a></li>
        <li class="contentss"><a id="3" href="#menu">Commercial</a></li>
    </ul>
</nav>
<div class="drop-content button-group filter-button-group">
    <div class="1">
        <ul class="drop-list">
        </ul>
    </div>
    <div class="2">
        <ul class="drop-list">
        </ul>
    </div>
    <div class="3">
        <ul class="drop-list">
        </ul>
    </div>
</div>
<div class="image-gallery">
    <a href="storage/slider/ntr1.jpg" data-lightbox="example-set" data-title="prewedding"><img class="example-image mermaid" src="storage/slider/ntr1.jpg" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="holy"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="holy"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="holy"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr1.png" data-lightbox="example-set" data-title="holy"><img class="example-image mermaid" src="storage/slider/gbr1.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="holy"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr1.png" data-lightbox="example-set" data-title="holy"><img class="example-image mermaid" src="storage/slider/gbr1.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="prewedding"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr1.png" data-lightbox="example-set" data-title="prewedding"><img class="example-image mermaid" src="storage/slider/gbr1.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="prewedding"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
</div>

<script src="{{ asset('lightbox2/dist/js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var isIsotopeInit = false;

        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'disableScrolling': true,
            'positionFromTop': 10,
            'alwaysShowNavOnTouchDevices': true
        })

        var $grid = $('.image-gallery').isotope({
            itemSelector: '.example-image',
            masonry: {
                columnWidth: '.image-gallery img',
                isFitWidth: true,
                gutter: 10
            }
        });

        $('.filter-button-group').on('click', 'button', function() {
            $(".filter-button-group button").removeClass('active');
            $(this).addClass('active');
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

        $(document).click(function(event) {
            var target = event.target.id;
            var a = $('.drop-content .active').length
            if (a == 0 && (target == 1 || target == 2 || target == 3)) {
                dropContent(target);
            } else {
                $('.drop-content .active ul').empty();
                $('.drop-content .active').removeClass('active');
            }
        });

    });

    function dropContent(a) {
        if (a == 1) {
            var txt1 =
                '<li ><a href="#">Prewedding</a></li>' +
                '<li ><a href="#">Holy Matrimony</a></li>' +
                '<li ><a href="#">Reception</a></li>';
        } else if (a == 2) {
            var txt1 = '<li ><a href="#">Birthday</a></li>' +
                '<li ><a href="#">Prom</a></li>' +
                '<li ><a href="#">Graduation</a></li>' +
                '<li ><a href="#">Maternity</a></li>' +
                '<li ><a href="#">Family</a></li>' +
                '<li ><a href="#">Mom</a></li>' +
                '<li ><a href="#">Bridesmaid</a></li>';

        } else {
            var txt1 = '<li ><a href="#">Kids</a></li>' +
                '<li ><a href="#">Man</a></li>' +
                '<li ><a href="#">Woman</a></li>';

        }

        var id = '.' + a;
        var status = $(id).addClass('active');
        $('.drop-content ' + id + ' ul').append(txt1);
    }
</script>
@endsection