<?php

require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>

<body>
    <h1>php-oop-1</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Film</th>
                <th scope="col">durata</th>
                <th scope="col">genere</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrayMovies as $elem) { ?>
                <tr>
                    <th scope='row'><?php echo $elem->nome ?></th>
                    <td><?php echo $elem->durata ?></td>
                    <td><?php echo $elem->type[0]->genere1 . ',' . $elem->type[0]->genere2 ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>