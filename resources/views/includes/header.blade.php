@php
    $links = config('header_menu')
@endphp


<header>
    <div class="container d-flex-j-between h-130">
      <a href="#"><img src="{{ asset('images/dc-logo.png') }}" alt="Logo DC" /></a>

      <nav>
        <ul>
          @foreach ($links as $link)
            <li>
            <a class="{{ request()->routeIs($link['route_name']) ? 'active' : '' }}" href="{{ route($link['route_name']) }}">{{ $link['text'] }}</a>
            </li>  
          @endforeach
        </ul>
      </nav>
    </div>
  </header>