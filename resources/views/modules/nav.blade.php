@php
    # Define a PHP array of links and their labels
        $nav = [
            'index' => 'Home',
            'about' => 'About',
            'cv' => 'CV',
            'contact' => 'Contact',
        ];
@endphp
<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Modern Millie</div>
<div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">millie.m.zhou@gmail.com</div>

<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Modern Millie</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
            @foreach($nav as $link => $label)
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded" href='/{{ $link }}' class='{{ Request::is($link) ? 'active' : '' }}'>{{ $label }}</a>
            @endforeach

        </ul>
      </div>
    </div>
  </nav>
