<?php

class Movie
{
    // variables
    public $title;
    public $description;
    public $link_to_trailer;
    public $lang = '';
    public $genres;
    public $poster_link;

    // constructor
    public function __construct(string $title, string $description, string $link_to_trailer, array $genres, $poster_link)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link_to_trailer = $link_to_trailer;
        $this->genres = $genres;
        $this->poster_link = $poster_link;
    }

    // methods 
    public function setLanguageTrailer($trailer_lang)
    {
        if ($trailer_lang == 'original') {
            $this->lang = 'en';
        } else {
            $this->lang = 'it';
        }
    }

    public function getLanguageTrailer()
    {
        return $this->lang;
    }
}
