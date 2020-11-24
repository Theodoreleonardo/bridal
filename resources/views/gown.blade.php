@extends('layout.app')
@section('title')
Gown
@endsection
<link rel="stylesheet" href="{{ asset('css/gown.css') }}">
<link rel="stylesheet" href="{{ asset('icofont/icofont.min.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Viga&display=swap" rel="stylesheet">
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($baner as $row)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($baner as $row)
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('storage')}}/images/imgbaner/{{$row->gambar}}">
        </div>
        @endforeach
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
@foreach($gaun[1] as $row)
{{$row->id_gauns}}
{{$row->ukuran}}
{{$row->deskripsi}}
@endforeach
<div class="image-gallery">
    @foreach($gaun[0] as $row)
    <a href="{{asset('storage')}}/images/imggaun/{{$row->gambar}}" data-lightbox="example-set" data-title="{{$row->nama}}"><img class="example-image {{$row->jenis}}" src="{{asset('storage')}}/images/imggaun/{{$row->gambar}}" alt="" /><span></span></a>
    @endforeach
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script src="{{ asset('lightbox2/dist/js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> -->
<script>
    $(document).ready(function() {

        $('.carousel-indicators').children(':first-child').addClass('active');
        $('.carousel-inner').children(':first-child').addClass('active');


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

        //image - hoverrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr
        //     $('.example-image').mouseenter(function() {
        //         $(this).next().text('rasanya amjimngg banget');
        //         $(this).next().css({
        //             'display': 'block'
        //         })
        //     });


        //     $('.example-image').mouseleave(function() {
        //         $(this).next().text('');
        //         $(this).next().css({
        //             'display': 'none'
        //         })
        //     });
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