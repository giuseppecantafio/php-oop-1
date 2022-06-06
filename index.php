<?php

require_once __DIR__ . './movie.php';

$myDB = [
    [
        'titolo' => 'Una notte da leoni',
        'genere' => 'commedia',
        'durata' => '120 minuti'
    ],
    [
        'titolo' => 'La casa',
        'genere' => 'horror',
        'durata' => '90 minuti'
    ]
    ];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie db</title>
</head>
<body>
    <?php foreach ($myDB as $myMovie) {
        $film = new Movie($myMovie['titolo'], $myMovie['genere'], $myMovie['durata']);
    ?>
    <h1>Titolo: <?php echo $film->getTitolo(); ?></h1>
    <h2>Genere: <?php echo $film->getGenere(); ?></h2>
    <h2>Durata<?php echo $film->getDurata(); ?></h2>
    <h4>Parental Control: <?php echo $film->getParentalControl(); ?></h4>
    <?php
        var_dump($film);
     } ?>
</body>
</html>