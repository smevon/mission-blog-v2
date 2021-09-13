<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>

    <section>
        <header>

<!--
            <nav>
                  <div style="text-align: center;">

                </div>
                <ul>
                    <li><a href="/"><img src="https://res.cloudinary.com/sergiu-adrian-ro/image/upload/c_scale,w_32/v1630605466/Logos/Lion%20Logo%20Sergiu%20Adrian.png"></a></li>
                    <li><a href="/articole">Articole</a></li>
                    <li><a href="/despre-mine">Cine sunt?</a></li>
                    <li><a href="/consultanta">Consultanță</a></li>
                    <li><a href="/trr">Țrr</a></li>
                </ul>

            </nav>
-->





  <div class="container-fluid" style="text-align: center">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li><a href="/"><img src="https://res.cloudinary.com/sergiu-adrian-ro/image/upload/c_scale,w_32/v1630605466/Logos/Lion%20Logo%20Sergiu%20Adrian.png"></a></li>

          <button id="len1" class="button-navbar bounce" style="vertical-align:middle" href="/articole"><span>Articole</span></button>
          <button id="len2" class="button-navbar bounce" style="vertical-align:middle" href="/despre-mine"><span>Cine sunt eu?</span></button>
          <button id="len3" class="button-navbar bounce" style="vertical-align:middle" href="/consultanta"><span>Consultanță</span></button>
          <button id="len4" class="button-navbar bounce" style="vertical-align:middle" href="/trr"><span>Țrr</span></button>


        </ul>
      </div>
    </nav>
  </div>

        </header>

        <article>
            <section>
                @yield('content')
            </section>

        </article>

        <footer>
            <small>
                &copy; <span data-year></span> {{ $page->owner->name }} &nbsp;&bull;&nbsp;
                <a href="/feed.atom">RSS</a> &nbsp;&bull;&nbsp;
                Tema este creată de
                <a href="https://github.com/raniesantos/artisan-static">Ranie Santos</a>
                &nbsp;&bull;&nbsp; Logo a fost creat cu
                <a href="https://logomakr.com/">LogoMakr</a>
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
