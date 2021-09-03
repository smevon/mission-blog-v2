@extends('_layouts.master')

@section('title', 'Articole')

@section('content')
    <h1>Articolele scrise până acum</h1>

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
