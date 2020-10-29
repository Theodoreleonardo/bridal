@extends('layout.app')
@section('title')
Gown
@endsection
<link rel="stylesheet" href="{{ asset('css/gown.css') }}">
<link rel="stylesheet" href="{{ asset('icofont/icofont.min.css') }}">
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
<div class="container kategori">
    <div class="row justify-content-center">
        <div class="col-6 text-center kategori-p">
            <h1>premium</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
        </div>
        <div class="col-6 text-center kategori-p">
            <h1>pertamax</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
        </div>
    </div>
</div>
<div class="button-group filter-button-group text-center">
    <button data-filter="*" class="active">All</button>
    <button data-filter=".mermaid">Mermaid</button>
    <button data-filter=".a-line">A line</button>
    <button data-filter=".ball">Ball Gown</button>
</div>
<div class="image-gallery">
    <a href="storage/slider/ntr1.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image mermaid" src="storage/slider/ntr1.jpg" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr2.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image ball" src="storage/slider/gbr2.png" alt="" /><span></span></a>
    <a href="storage/slider/gbr1.png" data-lightbox="example-set" data-title="mermaid"><img class="example-image mermaid" src="storage/slider/gbr1.png" alt="" /><span></span></a>
</div>


<script src="{{ asset('lightbox2/dist/js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.js') }}"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
    $(document).ready(function() {
        var isIsotopeInit = false;

        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'disableScrolling': true,
            'positionFromTop': 100,
            'alwaysShowNavOnTouchDevices': true
        })

        // var $grid = $('.image-gallery').isotope({
        //     itemSelector: '.example-image',
        //     layoutMode: 'fitRows',
        //     fitRows: {
        //         gutter: 10
        //     },
        // });

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

    });
</script>
@endsection