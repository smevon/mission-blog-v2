@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <h1>Articolele scrise până amu</h1>

    <ul>
        @forelse ($posts->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ $post->prettyDate() }}</small>
            </li>
        @empty
            <p>Niciun articol de arătat. O dispărut toate ca prin minune.</p>
        @endforelse
    </ul>
@endsection
