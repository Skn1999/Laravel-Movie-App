@extends('layouts.main')

@section('content')
    <div class="container px-4 mx-auto pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular shows</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($popularTv as $tvShow)
                <x-tv-card :tvShow="$tvShow" />
            @endforeach
            
        </div>
    </div>

    {{-- Top Rated --}}
    <div class="container px-4 mx-auto pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated Shows</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($topRatedTv as $tvShow)
                <x-tv-card :tvShow="$tvShow" />
            @endforeach
            
            
        </div>
    </div>
@endsection