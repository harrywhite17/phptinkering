<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>DemoPHP</title>
</head>
<body>
<h1>
    <?php
    $greeting = "Hello World";
    echo $greeting;

    $a = 2;
    $b = 4;
    echo "<br>Resultat: " . ($a + $b);

    $films = [
        [        "name" => "Dune",
            "director" => "Denis Villeneuve",
            "year" => "2020",
        ],
        [        "name" => "Star Wars",
            "director" => "George Lucas",
            "year" => "1977",
        ],
        [        "name" => "Blade Runner 2049",
            "director" => "Denis Villeneuve",
            "year" => "2017",
        ],
        [        "name" => "Mad Max: Fury road",
            "director" => "George Miller",
            "year" => "2015",
        ],
        [        "name" => "Avatar",
            "director" => "James Cameron",
            "year" => "2009",
        ],
        [        "name" => "2001: a space odyssey",
            "director" => "Stanley Kubrick",
            "year" => "1968",
        ]];
    ?>
</h1>
<ul>
    <?php foreach ($films as $film) : ?>
        <li><?=$film["name"]?> (<?=$film["year"]?>) - <?=$film["director"]?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>