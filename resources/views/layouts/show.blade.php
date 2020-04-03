@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/images/parasite.jpg" alt="parasite" class="w-64 w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span>Rating</span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>

                </div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia fuga sequi nihil dignissimos magnam odio natus iste qui tempora veniam alias dolores, tempore, aperiam sit, voluptatibus autem earum repudiandae dolorem iure delectus magni debitis nostrum. Totam, eius adipisci recusandae maxime quam commodi? Temporibus animi deserunt corrupti, adipisci ex minus tenetur!
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibild">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Stroy</div>
                        </div>
                        <div class="ml-8">
                            <div>Ha Ji-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition duration-150 ease-in-out">
                        Play Trailer</button>
                </div>
            </div>
        </div>
        
        <div class="movie-cast border-b border-gray-800">
            <div class="container mx-auto py-16 px-4">
                <h2 class="font-semibold text-4xl">Cast</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                    <div class="mt-8">
                        <a href="#">
                            <img src="/images/parasite.jpg" alt="sci-fi" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/images/parasite.jpg" alt="sci-fi" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Hero Name</a>
                    
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/images/parasite.jpg" alt="sci-fi" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Hero Name
                            </a>
                            
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/images/parasite.jpg" alt="sci-fi" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Hero Name</a>
                            
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/images/parasite.jpg" alt="sci-fi" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Hero Name</a>
                        
                        </div>
                    </div>
            </div>
            
        </div>
    </div> 
@endsection