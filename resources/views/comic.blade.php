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
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="action comics poster">
                <span class="product-type-badge">COMIC BOOK</span>
                <span class="view-gallery-badge">VIEW GALLERY</span>
            </figure>
        </div>
    </section>

    {{-- Comic Description --}}
    <section id="comic-description">
        <div class="container d-flex">
            <div class="description">
                <h3>Action Comics #1000: The Deluxe Edition</h3>
                {{-- Mini shop section --}}
                <div class="mini-shop">
                    <div class="price-container">
                        <span>U.S. Price:<span class="price"> $19.99</span></span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="check-availability">
                        <span>check availability <i class="fa-solid fa-caret-down"></i></span>
                    </div>
                </div>
                <p>
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                </p>
            </div>
            <div class="advertisement">
                <h5>ADVERTISEMENT</h5>
                <img src="{{ asset('images/adv.jpg') }}" alt="">
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
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>
                    </div>
                </div>
                <div class="info-section">
                    {{-- Written by --}}
                    <div class="info-name">Written by:</div>
                    <div class="info-details">
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>,
                        <a href="#">Jose lusi garcia</a>
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
                        <a href="#">ACTION COMICS</a>
                    </div>
                </div>
                <div class="info-section">
                    {{-- Price --}}
                    <div class="info-name">U.S. Price:</div>
                    <div class="info-details">
                        $19.99
                    </div>
                </div>
                <div class="info-section">
                    {{-- Sales --}}
                    <div class="info-name">On Sale Date:</div>
                    <div class="info-details">
                        0ct 02 2018
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    
@endsection