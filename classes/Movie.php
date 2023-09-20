<?php

class Movie
{

    // Dichiarazione proprietà/attributi della classe Movie 

    public $movie_cover;
    public $year;
    public $title;
    public $plot;
    public $genre;
    public $director;

    // Dichiarazione costruttore 

    function __construct(string $_movie_cover, int $_year, string $_title, string $_plot, string $_genre,  string $_director)
    {

        $this->movie_cover = $_movie_cover;
        $this->year = $_year;
        $this->title = $_title;
        $this->plot = $_plot;
        $this->genre = $_genre;
        $this->director = $_director;
    }


    // Se non è presente un'immagine ne metto una di default

    public function defaultMovieCover($movie_cover)
    {

        if (is_null($movie_cover)) {
            return $this->movie_cover = "img/default-img.jpg";
        }
    }


    // Stampa della Movie Card 

    public function getHTMLCard() {

        $movie_title = $this->title;
        $movie_img = $this->movie_cover;
        $movie_year = $this->year;
        $movie_plot = $this->plot;
        $movie_genre = $this->genre;
        $movie_director = $this->director;

        return "<div class='card' style='width: 18rem;'>
        <img src='$movie_img' class='card-img-top'>
        <div class='card-body'>
        <h5 class='card-title'>$movie_title</h5>
        <p class='card-text'>$movie_year</p>
        <p class='card-text'>$movie_genre</p>
        <p class='card-text'>$movie_plot</p>
        <p class='card-text'>$movie_director</p>
        </div>
        </div>";
    }
}
