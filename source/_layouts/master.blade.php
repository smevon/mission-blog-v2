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
<script>

$(function(){
  var str = '#len'; //increment by 1 up to 1-nelemnts
  $(document).ready(function(){
    var i, stop;
    i = 1;
    stop = 4; //num elements
    setInterval(function(){
      if (i > stop){
        return;
      }
      $('#len'+(i++)).toggleClass('bounce');
    }, 500)
  });
});

</script>


    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>

    <section>
        <header>

          <div class="container-fluid">
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <ul class="nav navbar-nav">
                  <li><a href="/"><img src="https://res.cloudinary.com/sergiu-adrian-ro/image/upload/v1630605466/Logos/Lion%20Logo%20Sergiu%20Adrian.png" width="5%" height="5%"></a></li>
                  <li><a id="len1" class="hoverable" href="/articole">Articole</a></li>
                  <li><a id="len2" class="hoverable" href="/despre-mine">Cine sunt?</a></li>
                  <li><a id="len3" class="hoverable" href="/consultanta">Consultanță</a></li>
                  <li><a id="len4" class="hoverable" href="/trr">Țrr</a></li>
                </ul>
              </div>
            </nav>
            <div id="what-the-hell-is-this">
              <div class="page-title">
                <!--><h2>Coregraf de cuvinte</h2>
                <p class="lead">
                  Based on Hover.css, the goal of this pen
                  is to create a simple navigation bar <br />
                  that can be easily reused in both mobile and native displays. Mouse over the nav text for animation!
                </p>
                <!-->
              </div>
            </div>
          </div>


<!-->
            <nav>
                  <div style="text-align: center;">
                  <img src="https://res.cloudinary.com/sergiu-adrian-ro/image/upload/v1630605466/Logos/Lion%20Logo%20Sergiu%20Adrian.png" width="15%" height="15%">
                </div>
                <ul>
                    <li><a href="/">Acasă</a></li>
                    <li><a href="/articole">Articole</a></li>
                    <li><a href="/despre-mine">Cine sunt?</a></li>
                    <li><a href="/consultanta">Consultanță</a></li>
                    <li><a href="/trr">Țrr</a></li>
                </ul>
            </nav>
        <!-->
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
