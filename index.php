<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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




    <h1>Lista degli Hotel</h1>
    <ul>
        <?php foreach ($hotels as $hotel) : ?>
            <li>
                <h2><?php echo $hotel['name']; ?></h2>
                <p><strong>Descrizone:</strong> <?php echo $hotel['description']; ?></p>
                <p><strong>Parcheggio:</strong> <?php echo $hotel['parking'] ? 'Disponibile' : 'Non disponibile'; ?></p>
                <p><strong>Voto:</strong> <?php echo $hotel['vote']; ?></p>
                <p><strong>Distanza dal centro:</strong> <?php echo $hotel['distance_to_center']; ?> km</p>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>