<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
ciao
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random number</title>
</head>
<body>
        <?php
            // creo un array vuoto che popolerò con i numeri random
            $arrayNumbers = [];
            // finchè la lunghezza dell'array $arrayNumbers sarà inseriore a 15
            while(count($arrayNumbers) < 15){
                // crea un numero random tra 1 e 100
                $randomNumber = rand(1, 100);
                // se all'interno di $arandomNumber !(non è)in_array $arrayNumbers
                if(!in_array($randomNumber, $arrayNumbers) ){
                    // pusha all'interno di $arrayNumbers il $randomNumber
                    $arrayNumbers[] = $randomNumber;
                    
                    var_dump($arrayNumbers);
                } 
            }

        ?>
</body>
</html>