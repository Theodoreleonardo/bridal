@extends('layout.app')
@section('title')
Testimonial
@endsection

<link rel="stylesheet" href="{{ asset('css/testi.css') }}">
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
<div class="image-gallery">
    @foreach($testi as $row)
    <a href="{{asset('storage')}}/images/imgtestimoni/{{$row->gambar}}" data-lightbox="example-set" data-title="Testimoni"><img class="example-image mermaid" src="{{asset('storage')}}/images/imgtestimoni/{{$row->gambar}}" alt="" /><span></span></a>
    @endforeach
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script src="{{ asset('lightbox2/dist/js/lightbox.min.js') }}"></script>
<script>
    $(document).ready(function() {

        $('.carousel-indicators').children(':first-child').addClass('active');
        $('.carousel-inner').children(':first-child').addClass('active');

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