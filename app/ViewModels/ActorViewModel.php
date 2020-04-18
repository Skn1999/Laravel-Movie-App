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
        ])->dump();
    }

    public function social(){
        return collect($this->social)->merge([
            "instagram_id" => $this->social['instagram_id'] ? "https://www.instagram.com/".$this->social["instagram_id"] :  null,
            "facebook_id" => $this->social['facebook_id'] ? "https://www.facebook.com/".$this->social["facebook_id"] :  null,

        ])->dump();
    }

    public function knownForTitle(){
        $castTitles = collect($this->credits)->get('cast');

        return collect($castTitles)->where("media_type", "movie")->sortByDesc("popularity")->take(5)->dump();
    }
}
