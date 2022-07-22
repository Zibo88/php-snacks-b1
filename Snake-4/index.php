<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafo</title>
</head>

<body>

    <?php
        // creo la stringa del paragrafo
        $myParagraph = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?';

        // creo una variabile che avrà valore della stringa modificata
        // definisco il divisore e in che stringa cercare
        $newArray =  explode('.', $myParagraph);
        // valuto se è stata apportata la modifica
        // var_dump($newArray);
    ?>     
    
    <ul>
        <?php
        // avvio un ciclo for che vada avanti tanti quanti sono gli elementi dell'array
            for($i = 0; $i < count($newArray); $i++){?>
                <!-- valuto quanti elementi stampa -->
                <!-- <?php var_dump($newArray) ?> -->
                <!-- assegno ad ogni elemento dell'array una variabile -->
                <?php $newParagraph = $newArray[$i]?>
                <!-- valuto il valore della variabile -->
                <!-- <?php var_dump($newParagraph) ?>  -->
                <li>
                    <!-- stampo ogni singolo elemento -->
                    <?php echo $newParagraph?>
                </li>
        <?php } ?>
    </ul>

</body>
</html>