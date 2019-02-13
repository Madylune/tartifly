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
                            <div class="desc" style="background-color: white; border-radius: 25px; padding: 0 20px 10px;">
                                <h2>{{ $voyage->label }}</h2>
                                <span class="city">{{ $voyage->country }}, {{ $voyage->city }}</span>
                                <p class="price"><span>$45</span> <small>/ night</small></p>
                                <p>{{ $voyage->description }}</p>
                                <p><a href="#" class="btn btn-primary">Book Now!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>
<!-- <div class="voyage-wrapper" style="display: flex;">
    <div>
        <img src="{{ $voyage->picture }}" alt="picture"/>
    </div>
    <div style="margin-left: 20px;">
        <div class="desc">
            <h2>{{ $voyage->label }}</h2>
            <span class="city">{{ $voyage->country }}, {{ $voyage->city }}</span>
            <p class="price"><span>$45</span> <small>/ night</small></p>
            <p>{{ $voyage->description }}</p>
            <p><a href="#" class="btn btn-primary">Book Now!</a></p>
        </div>
    </div>
</div> -->

@endsection