<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">{{ env('APP_NAME') }}</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('artisans') }}">Artisans</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a target="_blank" href="http://laravel.com">Laravel.com</a></li>
            <li><a target="_blank" href="http://laravel.io">Laravel.io</a></li>
            <li><a target="_blank" href="http://laracasts.com">Laracasts</a></li>
            <li><a target="_blank" href="http://larajobs.com">Larajobs</a></li>
            <li><a target="_blank" href="http://laravel-news.com">Laravel News</a></li>
            <li><a target="_blank" href="http://larachat.co">Larachat</a></li>
          </ul>
        </li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">Login</a></li>
        <li><a href="">Register</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>