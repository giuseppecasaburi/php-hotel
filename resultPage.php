<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bool B&B Ricerca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    ?>

    <?php
    echo "<h1 class='result-title'>Eccola il nostro catalogo di hotel scelti apposta per te!</h1>";

    $parcheggio = $_GET["parcheggio"];
    $voto = $_GET["voto_recensioni"];
    $array_filtrato = [];

    foreach ($hotels as $hotel) {
        if (($voto === "inserisci_voto" || $hotel["vote"] >= $voto) && ($parcheggio === "all" || $hotel["parking"] === ($parcheggio === "true"))) {
            $array_filtrato[] = $hotel;
        };
    };
    ?>

    <div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($array_filtrato as $hotel_filtrati) { ?>
                    <tr>
                        <td><?php echo $hotel_filtrati["name"] ?></td>
                        <td><?php echo $hotel_filtrati["description"] ?></td>
                        <td><?php echo $hotel_filtrati["vote"] ?></td>
                        <td><?php echo $hotel_filtrati["parking"] ? "Si" : "No" ?></td>
                        <td><?php echo $hotel_filtrati["distance_to_center"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <a href="./homePage.php">Torna alla ricerca</a>
</body>

</html>