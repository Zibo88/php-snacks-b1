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
    <title>Teachers and PM</title>
</head>
<body>
  
    <?php
        $teacherArray = [];
        $pmArray = [];

        
        $teacherName = $db['teachers'];
        // var_dump($teacherName);
        $pmName = $db['pm'];
        // var_dump($teacherLastname);


        // var_dump($db['pm'][0]['name']);
        // var_dump($db['pm'][0]['lastname']);

        for($i = 0; $i = $i < count($teacherName); $i++){
            var_dump($teacherName);

             if(!in_array($teacherName, $teacherArray)){

                $teacherArray[] = $teacherName;
                var_dump($teacherArray);
             }
        } 

        for($i = 0; $i = $i < count($pmName); $i++){
            var_dump($pmName);

             if(!in_array($pmName, $pmArray)){

                $pmArray[] = $pmName;
                var_dump($pmArray);
            }
        } 
    ?>

    <!-- rettangoli -->
    <div class='lightgray'>
        <?php
            echo $teacherArray;
        ?>
    </div>

    <div class='green'>
    <?php
            echo $pmArray;
        ?>
    </div>
</body>
</html>