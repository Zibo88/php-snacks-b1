<!-- creiamo un array contente le partite di basket, Ogni array avrà una squadra in casa e una ospite, punti fatti.

stampiamo a schermo 

olimia - bologna | 55-60 -->

<!-- creo l'array associativo -->
<?php

    $matches = [
        [
            'home' => 'Olimpia Milano',
            'guest' => 'Bologna',
            'home-point' => 54,
            'guest-point' => 98,
        ],
        [
            'home' => 'Fortitudo',
            'guest' => 'Brescia',
            'home-point' => 58,
            'guest-point' => 79,
        ],
        [
            'home' => 'Varese',
            'guest' => 'Reggiana',
            'home-point' => 92,
            'guest-point' => 84,
        ],

        ];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matchs</title>
</head>
<body>
        <!-- array associativi a disposizione -->
        <!-- <?php var_dump($matches)?> -->

        <ul>
            <!-- creo l'elemento html da stampare -->
            <?php
            // avvia un ciclo for che stampaerà tante li quante ne sono presneti nell'array associativo $matches
                for($i = 0; $i < count($matches); $i++){?>
                <!-- inserisco ogni singolo elemento all'interno di una variabile -->
                <?php $theMacth = $matches[$i]?>
                <!-- <?php var_dump($theMacth) ?> -->
                <!-- elemento che verrà stampato più volte -->
                <li>
                    <!-- elementi che comporranno l'li -->
                    <span><?php echo $theMacth['home'] ?> - </span>
                    <span><?php echo $theMacth['guest']?> | </span>
                    <span><?php echo $theMacth['home-point'] ?> - </span>
                    <span><?php echo $theMacth['guest-point']?></span>
                </li>
                
            <?php } ?>
        </ul>
    
</body>
</html>