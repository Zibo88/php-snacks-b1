<!-- Utilizzare questo array: Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

      
<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Teachers and PM</title>
</head>
<body>
  
    <?php
        // definisco gli elementi presenti nell'array $db in una varibile
        // elementi presenti dentro teachers
        $teacherName = $db['teachers'];
        // var_dump($teacherName);
        // elementi presenti dentro pm
        $pmName = $db['pm'];
        // var_dump($teacherLastname);

        // var_dump($db['pm'][0]['name']);
        // var_dump($db['pm'][0]['lastname']); 
    ?>

    <!-- rettangoli -->
    <!-- creeo due div che accoglieranno i nomi dei teacher e dei pm -->
    <!-- teacher -->
    <div class='lightgray'>
        <?php
            for($i = 0; $i = $i < count($teacherName); $i++){?>
            <!-- primo nome -->
            <div class='name'>
                <?php echo "Nome:" . ' ' . $teacherName[0]['name'] . '  ' . '  '."Cognome:" . ' '  . $teacherName[0]['lastname'];?>
            </div>
                <!-- secondo nome -->
            <div class='name'>
                <?php echo "Nome:" . ' ' . $teacherName[$i]['name'] . '  ' . 'Cognome:' . ' ' . $teacherName[$i]['lastname'];?>
            </div>
        <?php } ?>
    </div>

    <!-- pm -->
    <div class='green'>
        <?php
            for($i = 0; $i = $i < count($pmName); $i++){?>
            <!-- primo nome -->
            <div class='name'>
                <?php echo "Nome:" . ' ' . $pmName[0]['name'] . '  ' . '  '."Cognome:" . ' '  . $pmName[0]['lastname'];?>
            </div>
                <!-- secondo nome -->
            <div class='name'>
                <?php echo "Nome:" . ' ' . $pmName[$i]['name'] . '  ' . 'Cognome:' . ' ' . $pmName[$i]['lastname'];?>
            </div>
        <?php } ?>
    </div>
</body>
</html>