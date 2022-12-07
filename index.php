<?php

/* Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere. */

class Movie
{
    // variables
    public $title;
    public $description;
    public $link_to_trailer;
    public $lang = '';
    public $genres;

    // constructor
    public function __construct(string $title, string $description, string $link_to_trailer, array $genres)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link_to_trailer = $link_to_trailer;
        $this->genres = $genres;
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

// first obj.
$alien = new Movie('Alien', 'movie on aliens', 'https://alien...', ['action', 'distopian']);

var_dump($alien);

$alien->setLanguageTrailer('original');
$alien_lang = $alien->getLanguageTrailer();
var_dump($alien_lang);

// second obj.

$matrix = new Movie('Matrix', 'matrix description', 'https://matrix...',  ['action', 'distopian']);

var_dump($matrix);

$matrix->setLanguageTrailer('not original');
$matrix_lang = $matrix->getLanguageTrailer();
var_dump($matrix_lang);
