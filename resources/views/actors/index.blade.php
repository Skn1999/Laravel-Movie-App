@extends('layouts.main')

@section('content')
    <div class="container px-4 mx-auto py-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular actors</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($popularActors as $actor)
                
                <div class="actor mt-8">
                    <a href={{ route("actors.show", $actor['id'])}}>
                        <img src="{{ $actor['profile_path'] }}" alt="Profile Image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href={{ route("actors.show", $actor['id'])}} class="text-lg hover:text-gray-300">{{ $actor['name'] }}</a>
                        <div class="text-sm truncate text-gray-4000">{{ $actor['known_for'] }} </div>
                    </div>
                </div>
                
            @endforeach
        </div>
        <div class="page-load-status my-8">
            <p class="infinite-scroll-request">Loading...</p>
            <p class="infinite-scroll-last">End of content</p>
            <p class="infinite-scroll-error">No more pages to load</p>
          </div>
        {{-- <div class="flex justify-between mt-16">
            @if ($previous)
                <a href="/actors/page/{{$previous}}">Previous</a>

            @else
                <div></div>
            @endif

            @if ($next)
                <a href="/actors/page/{{$next}}">Next</a>
            @else
                <div></div>
            @endif
        </div> --}}
    </div>

@endsection

@section('scripts')
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        var elem = document.querySelector('.grid');
        var infScroll = new InfiniteScroll( elem, {
        // options
        path: "/actors/page/@{{#}}",
        append: '.actor',
        // history: false,
        status: '.page-load-status'
        });
    </script>
@endsection