@extends('layouts.main')
@section('head-link')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css' integrity='sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==' crossorigin='anonymous'/>
@endsection

@section('content')
    <div class="jumbotron"></div>
    {{-- Comic poster --}}
    <section id="comic-poster-container">
        <div class="container">
            <figure>
                <img src="{{ $comic['thumb'] }}" alt="action comics poster">
                <span class="product-type-badge">COMIC BOOK</span>
                <span class="view-gallery-badge">VIEW GALLERY</span>
            </figure>
        </div>
    </section>

    {{-- Comic Description --}}
    <section id="comic-description">
        <div class="container d-flex">
            <div class="description">
                <h3>{{ $comic['title'] }}</h3>
                {{-- Mini shop section --}}
                <div class="mini-shop">
                    <div class="price-container">
                        <span>U.S. Price:<span class="price"> {{ $comic['price'] }}</span></span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="check-availability">
                        <span>check availability <i class="fa-solid fa-caret-down"></i></span>
                    </div>
                </div>
                <p>
                    {{ $comic['description'] }}
                </p>
            </div>
            <div class="advertisement">
                <h5>ADVERTISEMENT</h5>
                <a href="#"><img src="{{ asset('images/adv.jpg') }}" alt="adv"></a>
            </div>
        </div>
    </section>

    {{-- Talent and Specs --}}
    <section id="talent-and-specs">
        <div class="container d-flex">
            {{-- Talent --}}
            <div class="talent">
                <h3>Talent</h3>
                <div class="info-section">
                    {{-- Art by --}}
                    <div class="info-name">Art by:</div>
                    <div class="info-details">
                        @foreach ($comic['artists'] as $artist)
                            <a href="#">{{ $artist }}</a>
                            @if (! $loop->last)
                                ,
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="info-section">
                    {{-- Written by --}}
                    <div class="info-name">Written by:</div>
                    <div class="info-details">
                        @foreach ($comic['writers'] as $writer)
                            <a href="#">{{ $writer }}</a>
                            @if (! $loop->last), 
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Specs --}}
            <div class="specs">
                <h3>Specs</h3>
                <div class="info-section">
                    {{-- Series --}}
                    <div class="info-name">Series:</div>
                    <div class="info-details">
                        <a href="#">{{ $comic['series'] }}</a>
                    </div>
                </div>
                <div class="info-section">
                    {{-- Price --}}
                    <div class="info-name">U.S. Price:</div>
                    <div class="info-details">
                        {{ $comic['price'] }}
                    </div>
                </div>
                <div class="info-section">
                    {{-- Sales --}}
                    <div class="info-name">On Sale Date:</div>
                    <div class="info-details">
                        {{ $comic['sale_date'] }}
                    </div>
                </div>
            
            </div>

            
        </div>
    </section>

    {{-- Shop Links Section --}}
    <section id="shop-banner" class="d-flex align-items-center">
        <div class="container d-flex ">
            <div class="card">
                <a href=""><span>digital comics</span></a>
                <div class="icons icon1"></div>
            </div>
            <div class="card">
                <a href=""><span>shop dc</span></a>
                <div class="icons icon2"></div>
            </div>
            <div class="card">
                <a href=""><span>comic shop locator</span></a>
                <div class="icons icon3"></div>
            </div>
            <div class="card">
                <a href=""><span>subscriptions</span></a>
                <div class="icons icon4"></div>
            </div>
        </div>
    </section>
@endsection