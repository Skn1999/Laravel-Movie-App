<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class ActorViewModel extends ViewModel
{
    public $actor;
    public $social;
    public $credits;
    public function __construct($actor, $social, $credits)
    {
        //
        $this->actor = $actor;
        $this->social = $social;
        $this->credits = $credits;
    }

    public function actor(){
        return collect($this->actor)->merge([
            'birthday' => Carbon::parse($this->actor['birthday'])->format("M d, Y"),
            "age" => Carbon::parse($this->actor["birthday"])->age,
            "profile_path" => $this->actor["profile_path"]
                ? "https://image.tmdb.org/t/p/w300/".$this->actor['profile_path'] 
                : "https://via.placeholder.com/300x450",
        ]);
    }

    public function social(){
        return collect($this->social)->merge([
            "instagram_id" => $this->social['instagram_id'] ? "https://www.instagram.com/".$this->social["instagram_id"] :  null,
            "facebook_id" => $this->social['facebook_id'] ? "https://www.facebook.com/".$this->social["facebook_id"] :  null,

        ]);
    }

    public function knownForMovies(){
        $castMovies = collect($this->credits)->get('cast');

        return collect($castMovies)->sortByDesc("popularity")->take(5)->map(
            function($movie){

                    if(isset($movie['title']))
                        $title = $movie['title'];
                    
                    else if( isset($movie['name']))
                        $title = $movie['name'];
                    else $title = "Untitled";

                    return collect($movie)->merge([
                        "poster_path" => $movie['poster_path']
                                        ? 'https://image.tmdb.org/t/p/w185'.$movie["poster_path"]
                                        : "https://via.placeholder.com/185x278",
                        "title" => $title,
                        "linkToPage" => $movie['media_type'] === 'movie' ? route("movie.show", $movie['id']) : route("tv.show", $movie['id']),
                    ])->only(
                        "poster_path", "id", "title", "linkToPage", "media_type"
                    );
                });
    }

    public function credits(){
        $credits = collect($this->credits)->get("cast");

        return collect($credits)->map(function($credit){

                    if( isset($credit['release_date'])){
                        $release_date = $credit['release_date'];
                    }
                    else if( isset($credit['first_air_date'])){
                        $release_date = $credit['first_air_date'];
                    }
                    else{
                        $release_date = "";
                    }

                    if( isset($credit['title'])){
                        $title = $credit['title'];
                    }
                    else if( isset($credit['name'])){
                        $title = $credit['name'];
                    }
                    else{
                        $title = "Untitled";
                    }

                    return collect($credit)->merge([
                        'release_date' => $release_date,
                        "release_year" => isset($credit['release_date']) ? Carbon::parse($release_date)->format("Y") : 'Future',
                        'title' => $title,
                        'character' => isset($credit['character']) ? $credit['character'] : "",
                    ])->only(
                        "title", "release_date", "release_year", "character", "id", "credit_id"
                    );

                    })->sortByDesc("release_date");
    }
}
