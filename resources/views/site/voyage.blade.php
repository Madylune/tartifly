@extends('layouts.site')

@section('content')
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
        <li style="background-image: url('{{ $voyage->picture }}');">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                        <div class="slider-text-inner text-center">
                            <h1>{{ $voyage->label }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>
<div class="colorlib-wrap">
    <div class="container" style="display: flex;">
        <div style="display: flex; flex-wrap: wrap; flex-basis: 60%;">
            <div><img src="{{ $voyage->picture }}" alt="picture" height="200px" style="margin: 5px;"/></div>
            @foreach ($voyage->photos as $photo)
            <div><img src="{{ $photo->picture }}" alt="picture" height="200px" style="margin: 5px;"/></div>
            @endforeach
        </div>
        <div style="margin-left: 15px; flex-basis: 40%;">
            <h2>{{ $voyage->label }}</h2>
            <p class="city" style="font-size: 16px">{{ $voyage->destination ? $voyage->destination->destination : $voyage->country }}, {{ $voyage->city }}</p>
            <div class="desc">
                <p>{{ $voyage->description }}</p>
                <p class="price"><span>${{ $voyage->price}}</span></p>
                <p><strong>Available in {{ $voyage->period }}</strong></p>
                <p><a href="#" class="btn btn-primary">Book Now!</a></p>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection