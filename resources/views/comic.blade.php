@extends('layouts.main')

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
        <div class="container">
            <div class="description">
                <h3>Action Comics #1000: The Deluxe Edition</h3>
                <div class="mini-shop">
                    <div class="price-container">
                        <span>U.S. Price:<span class="price"> $19.99</span></span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="check-availability">
                        <span>check availability</span>
                    </div>
                </div>
                <p>
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                </p>
            </div>
            <div class="advertisement"></div>
        </div>
    </section>
    
@endsection