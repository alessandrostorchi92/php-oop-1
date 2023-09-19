<?php

class Movie {

    // Dichiarazione proprietà attributi della classe Movie 

    public $movie_cover;
    public $year;
    public $title;
    public $plot;
    public $genre;
    public $director;

    // Dichiarazione costruttore 

    function __construct($_title, $_year) {
        
    }

    // Dichiarazione del metodo della classe Movie 

    public function get_my_favourite_movies () {

        return $this->title;

    }


    
}


?>