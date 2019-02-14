@extends('layouts.site')

@section('content')
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
        <li style="background-image: url(images/cover-img-travels.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                        <div class="slider-text-inner text-center">
                            <h1>Voyages</h1>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>
<div class="colorlib-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="wrap-division">
                        @foreach ($voyages as $voyage)
                        <div class="col-md-6 col-sm-6 animate-box">
                            <div class="tour">
                                <a href="/voyages/{{ $voyage->id }}" class="tour-img" style="background-image: url('{{ $voyage->picture }}');">
                                    <p class="price"><span>${{ $voyage->price }} / in {{ $voyage->period }}</span></p>
                                </a>
                                <span class="desc">
                                    <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                                    <h2><a href="/voyages/{{ $voyage->id }}">{{ $voyage->label }}</a></h2>
                                    <span class="city">{{ $voyage->country }}, {{ $voyage->city }}</span>
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="pagination">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- SIDEBAR-->
            <div class="col-md-3">
                <div class="sidebar-wrap">
                    <div class="side search-wrap animate-box">
                        <h3 class="sidebar-heading">Find your tour</h3>

                        <form class="colorlib-form" method="GET">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="date">Where:</label>
                                        <div class="form-field">
                                            <input type="text" name="country" class="form-control" placeholder="Search Location">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="date">When:</label>
                                        <div class="form-field">
                                            <input type="text" name="period" class="form-control" placeholder="Search Period">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="submit" name="submit" id="submit" value="Find Flights" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="side animate-box">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="sidebar-heading">Price Range</h3>
                                <form method="post" class="colorlib-form-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="guests">Price from:</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                            <option value="#">1</option>
                                            <option value="#">200</option>
                                            <option value="#">300</option>
                                            <option value="#">400</option>
                                            <option value="#">1000</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="guests">Price to:</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                            <option value="#">2000</option>
                                            <option value="#">4000</option>
                                            <option value="#">6000</option>
                                            <option value="#">8000</option>
                                            <option value="#">10000</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection