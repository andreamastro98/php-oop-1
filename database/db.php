<?php

require_once __DIR__ . '/../models/movie.php';

$arrayMovies = [
    new movie('Inception', '160 minuti', 'fantascienza'),
    new movie('The day after tomorrow', '100 minuti', 'apocalittico'),
    new movie('Django', '160 minuti', 'action'),
];

var_dump($arrayMovies)




?>