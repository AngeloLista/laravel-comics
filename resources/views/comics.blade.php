@php
    $comics = config('comics')
@endphp

@extends('layouts.main')

@section('title', 'Welcome to DC')

@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron"></div>
    <div class="title container">
        <h2>CURRENT SERIES</h2>
      </div>
      <div class="container" id="products">
        {{-- ProductCard --}}
        @foreach ($comics as $comic)
            
        <div class="card">
            <a href="#">
                <img class="card-thumbnail" src="{{ $comic['thumb'] }}" alt="" />
                <span>{{ $comic['series'] }}</span>
            </a>
        </div>
        @endforeach
        <div id="load-more">load more</div>
      </div>
    @include('includes.sub_main_menu')

@endsection