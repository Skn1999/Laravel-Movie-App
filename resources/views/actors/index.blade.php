@extends('layouts.main')

@section('content')
    <div class="container px-4 mx-auto py-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular actors</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($popularActors as $actor)
                
                <div class="actor mt-8">
                    <a href="">
                        <img src="{{ $actor['profile_path'] }}" alt="Profile Image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">{{ $actor['name'] }}</a>
                        <div class="text-sm truncate text-gray-4000">{{ $actor['known_for'] }} </div>
                    </div>
                </div>
                
            @endforeach
        </div>
        <div class="flex justify-between mt-16">
            @if ($previous)
                <a href="/actors/page/{{$previous}}">Previous</a>
            @endif

            @if ($next)
                <a href="/actors/page/{{$next}}">Next</a>
            @endif
        </div>
    </div>

@endsection