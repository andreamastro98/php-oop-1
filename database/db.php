<?php

require_once __DIR__ . '/../models/movie.php';
require_once __DIR__ . '/../models/type.php';

$arrayMovies = [
    new movie('Inception', '160 minuti', [new type('action','fantascientifico')]),
    new movie('The day after tomorrow', '100 minuti', [new type('action', 'fantascientifico')]),
    new movie('Django', '160 minuti', [new type('action', 'fantascientifico')]),
];

var_dump($arrayMovies)




?>