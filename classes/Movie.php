<?php

class Movie {

    // Dichiarazione proprietà/attributi della classe Movie 

    public $movie_cover;
    public $year;
    public $title;
    public $plot;
    public array $genre;
    public $director;

    // Dichiarazione costruttore 

    function __construct(string $_movie_cover, int $_year, string $_title, string $_plot, array $_genre, string $_director) {

        $this->movie_cover = $_movie_cover;
        $this->year = $_year;
        $this->title = $_title;
        $this->plot = $_plot;
        $this->genre = $_genre;
        $this->director = $_director;
    }


    // Se non è presente un'immagine ne metto una di default

    public function defaultMovieCover($movie_cover) {

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

        // La funzione implode trasforma un array in stringhe separate da una virgola
        $movie_genre = implode(", ",$this->genre);

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

    // Questo metodo aggiunge un genere all'array 

    public function addGenre($_genre)  {

        $this->genre[] = $_genre;
        
    }

     // Questo metodo rimuove un genere all'array 

     public function removeGenre($_genre)  {

        // Cerca la l'indice dell'elemento nell'array e restituirà l'indice dell'elemento se lo trova, altrimenti restituirà false se l'elemento non è presente nell'array.
        $index = array_search($_genre, $this->genre);

        if ($index !== false) {
        // Se l'elemento $_genre è stato trovato nell'array, la funzione array_splice viene utilizzata per rimuovere l'elemento dall'array 
            array_splice($this->genre, $_genre, 1);
        }

    }

}

?>
