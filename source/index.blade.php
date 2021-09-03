@extends('_layouts.master')

@section('content')
    <h1>Și dacă-mi scuipă în supă?</h1>

    <p>Când unii suflă-n supă.</p>

    <p>Și tu vrei să-ți faci cumpărăturile în tihnă, și nu-ți iese?</p>

    <p>Așai că-i frustrant să ți se trântească ciorba pe masă?</p>

    <p>Ei bine, ăsta-i scopul meu aici, să-ți fie așezată ciorba mai frumos pe masă.</p>


<p> Ar fi o idee rea? </p>

<button class="button-js" style="vertical-align:middle"><span>Nu</span></button>






  <strong>Citește articolele de pe blog.</strong>

  <ul>
      @forelse ($posts->sortBy('date') as $post)
          <li>
              <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
              <small>{{ $post->prettyDate() }}</small>
          </li>
      @empty
          <p>Niciun articol de arătat. O dispărut toate ca prin minune.</p>
      @endforelse
  </ul>

  @endsection
