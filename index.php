<?php

/* è definita una classe ‘Movie’
 - all'interno della classe sono dichiarate delle variabili d'istanza
 - all'interno della classe è definito un costruttore
 - all'interno della classe è definito almeno un metodo
 results: vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

class Movie
{
    // variables
    public $title;
    public $description;
    public $link_to_trailer;
    public $lang = '';

    // constructor
    public function __construct(string $title, string $description, string $link_to_trailer)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link_to_trailer = $link_to_trailer;
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
$alien = new Movie('Alien', 'movie on aliens', 'https://alien...',);

var_dump($alien);

$alien->setLanguageTrailer('original');
$alien_lang = $alien->getLanguageTrailer();
var_dump($alien_lang);

// second obj.

$matrix = new Movie('Matrix', 'matrix description', 'https://matrix...');

var_dump($matrix);

$matrix->setLanguageTrailer('not original');
$matrix_lang = $matrix->getLanguageTrailer();
var_dump($matrix_lang);
