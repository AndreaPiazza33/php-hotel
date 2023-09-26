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
   
    var_dump($hotels)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>PHP Hotel</title>
</head>
<body>
    <div>
        <h1>HOTELS:</h1>
        <?php foreach ($hotels as $hotel) { ?>
            <ul>    
                <li>
                    <?php echo $hotel["name"]?>
                </li>
                <li>
                    <?php echo $hotel["description"]?>
                </li>
                <li>
                    <?php if ($hotel["parking"] == true) {
                        echo "true";
                    }
                    elseif ($hotel["parking"] == false) {
                        echo "false";
                    } 
                    ?>
                </li>
                <li>
                    <?php echo $hotel["vote"]?>
                </li>
                <li>
                    <?php echo $hotel["distance_to_center"]?>
                </li>   
            </ul>
        <?php }; ?>                 
    </div>
</body>
</html>