@extends('layout.app')
@section('title')
MakeUp
@endsection


<link rel="stylesheet" href="{{ asset('css/makeup.css') }}">
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
    <div class="3 asd">
        <ul class="drop-list">
        </ul>
    </div>
</div>
<div class="image-gallery">
    @foreach($makeup as $row)
    <a href="{{asset('storage')}}/images/imgmakeup/{{$row->gambar}}" data-lightbox="example-set" data-title="{{$row->style}}"><img class="example-image {{$row->style}}" src="{{asset('storage')}}/images/imgmakeup/{{$row->gambar}}" alt="" /><span></span></a>
    @endforeach
</div>

<script src="{{ asset('lightbox2/dist/js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script>
    $(document).ready(function() {

        $('.carousel-indicators').children(':first-child').addClass('active');
        $('.carousel-inner').children(':first-child').addClass('active');

        var isIsotopeInit = false;
        var filterValue = "Prewedding";
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
            filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

        $(document).click(function(event) {
            var target = event.target.id;
            var a = $('.drop-content .active').length
            if (a == 0 && (target == 1 || target == 2 || target == 3)) {
                var wid = $('#' + target).parent().width();
                var pos = $('#' + target).parent().position().left;
                dropContent(target, wid, pos);
            } else {
                $('.drop-content .active ul').empty();
                $('.drop-content .active').removeClass('active');
            }
        });

    });

    function dropContent(a, b, c) {
        if (a == 1) {
            var txt1 =
                '<button data-filter=".Prewedding">Prewedding</button><br>' +
                '<button data-filter=".Holy">Holy Matrimony</button><br>' +
                '<button data-filter=".Reception">Reception</button>';
            // '<li data-filter=".Prewedding"><a href="#menu">Prewedding</a></li>' +
            // '<li data-filter=".Prewedding"><a href="#menu">Holy Matrimony</a></li>' +
            // '<li data-filter=".Prewedding"><a href="#menu">Reception</a></li>';
        } else if (a == 2) {
            var txt1 =

                '<button data-filter=".Birthday">Birthday</button><br>' +
                '<button data-filter=".Prom">Prom</button><br>' +
                '<button data-filter=".Graduation">Graduation</button><br>' +
                '<button data-filter=".Maternity">Maternity</button><br>' +
                '<button data-filter=".Family">Family</button><br>' +
                '<button data-filter=".Mom">Mom</button><br>' +
                '<button data-filter=".Bridesmaid">Bridesmaid</button><br>';

            // '<li data-filter=".Birthday"><a href="#menu">Birthday</a></li>' +
            // '<li data-filter=".Birthday"><a href="#menu">Prom</a></li>' +
            // '<li ><a href="#menu">Graduation</a></li>' +
            // '<li ><a href="#menu">Maternity</a></li>' +
            // '<li ><a href="#menu">Family</a></li>' +
            // '<li ><a href="#menu">Mom</a></li>' +
            // '<li ><a href="#menu">Bridesmaid</a></li>';

        } else {
            var txt1 =
                '<button data-filter=".Kids">Kids</button><br>' +
                '<button data-filter=".Man">Man</button><br>' +
                '<button data-filter=".Woman">Woman</button><br>';
            // '<li ><a href="#menu">Kids</a></li>' +
            // '<li ><a href="#menu">Man</a></li>' +
            // '<li ><a href="#menu">Woman</a></li>';
        }

        var id = '.' + a;
        var status = $(id).addClass('active');
        $('.drop-content ' + id + ' ul').append(txt1);
        $('.drop-content ' + id + ' ul').width(b);
        $('.drop-content ' + id + ' ul').css({
            left: c
        });
    }
</script>
@endsection