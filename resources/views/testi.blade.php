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
@endsection