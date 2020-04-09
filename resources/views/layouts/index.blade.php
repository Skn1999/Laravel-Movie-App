@extends('layouts.main')

@section('content')
    <div class="container px-4 mx-auto pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular movies</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($popularMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres" />
            @endforeach
            
        </div>
    </div>

    {{-- Now playing --}}
    <div class="container px-4 mx-auto pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">now playing</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($nowPlayingMovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres" />
                
            @endforeach
            
            
        </div>
    </div>
@endsection