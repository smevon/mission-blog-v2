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

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
        <header>
            <nav>
                <strong>{{ $page->site->title }}</strong><br>
                <ul>
                    <li><a href="/">Acasă</a></li>
                    <li><a href="/articole">Articole</a></li>
                    <li><a href="/despre-mine">Cine sunt?</a></li>
                    <li><a href="/consultanta">Consultanță</a></li>
                    <li><a href="/trr">Țrr</a></li>
                </ul>
            </nav>
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
                Tema paginii este creată de Ranie Santos &nbsp;&bull;&nbsp;
                <a href="https://github.com/raniesantos/artisan-static">GitHub repo</a>
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
