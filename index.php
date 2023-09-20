<?php

require_once __DIR__ . '/classes/Movie.php';

// Creazione della prima istanza della classe Movie 
$movie1 = new Movie ("./img/Taxi-Driver.jpg", 1976, "Taxi Driver", "Enraged by the moral corruption and urban decay of New York City, a deranged taxi driver goes mad, plots a murder, and saves a young prostitute.", "Thriller", "Martin Scorzese");

// Assegnazione dei valori degli attributi per questa istanza e trasferimento dei medesimi nella function__construct()

//* $movie1->movie_cover = './img/Taxi-Driver.jpg';
//* $movie1->year = 1976;
//* $movie1->title = "Taxi Driver";
//* $movie1->plot = "Enraged by the moral corruption and urban decay of New York City, a deranged taxi driver goes mad, plots a murder, and saves a young prostitute.";
//* $movie1->genre = "Thriller";
//* $movie1->director = "Martin Scorzese";


//TODO Controllo oggetto 1
//? var_dump($movie1); OK

// Creazione della seconda istanza della classe Movie
$movie2 = new Movie ("./img/American-Psycho.jpg", 2000, "American Psycho", "A broker, with statuesque beauty masking his madness, develops a pathological pride in the yuppie lifestyle and indulges in sudden homicidal impulses.", "Thriller", "Mary Harron");

// Assegnazione dei valori degli attributi per questa istanza e trasferimento dei medesimi nella function__construct()

//* $movie2->movie_cover = './img/American-Psycho.jpg';
//* $movie2->year = 2000;
//* $movie2->title = "American Psycho";
//* $movie2->plot = "A broker, with statuesque beauty masking his madness, develops a pathological pride in the yuppie lifestyle and indulges in sudden homicidal impulses.";
//* $movie2->genre = "Thriller";
//* $movie2->director = "Mary Harron";


//TODO Controllo oggetto 2
//? var_dump($movie2); OK




?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Creare un file index.php in cui importare una classe Movie, istanziati almeno due oggetti Movie e stampati a schermo i valori delle relative proprietà">
    <title>PHP OOP</title>

    <!-- Framework Bootstrap css  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Font Awesome CDN  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Custom css  -->

    <link rel="stylesheet" href="./css/style.css">

</head>


<body>

<main>

    <div class="container mt-5">
        
    </div>

</main>


</body>


</html>