<div class="relative mt-3 md:mt-0" x-data="{ isOpen:true }" @click.away = "isOpen = false">
    <input wire:model.debounce.500ms="search" 
            type="text" 
            class="bg-gray-800 font-semibold rounded-full w-64 px-4 pl-8 py-1 text-sm focus:outline-none focus:shadow-outline " 
            placeholder="Search"
            @focus="isOpen = true"
            x-ref = "search"
            @keydown.window = "
                if( event.keycode == 191){
                    event.preventDefault();
                    $refs.search.focus(); 
                }
            "
            @keydown.escape.window = "isOpen= false"
            @keydown="isOpen = true"
            @keydown.shift.tab.window="isOpen = false"
    >

    <div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4" x-show="isOpen">
        @if ( $searchResults->count() >= 2)
            <ul>
                @foreach ($searchResults as $result)
                
                    <li class="border-b border-gray-700">
                    <a 
                        href=" {{ route('movies.show', $result['id'])}}" 
                        class="block hover:bg-gray-700 px-3 py-3 flex items-center"
                        @if ($loop->last)
                            @keydown.tab="isOpen = false"
                        @endif
                    >

                        @if ( $result['poster_path'])
                            <img src="{{ 'https://image.tmdb.org/t/p/w92/'.$result['poster_path'] }}" alt="Poster" class="w-8">
                        @else
                            <img src="https://via.placeholder.com/50x75" alt="Poster" class="w-8">
                            
                        @endif
                        <span class="ml-4">{{$result['title']}}</span>
                    
                    </a>
                    </li>
                @endforeach
            </ul>
        @else
            @if ( $search != "")
                <div class="px-3 py-3">No results found for <span class="text-gray-500">"{{ $search }}"</span> </div>
            @endif
        @endif
    </div>
</div>