<?php

$squadre = [
    [
        'squadra_casa' => 'Roma',
        'squadra_ospite' => 'inter',
        'punti_casa' => rand(1, 100),
        'punti_ospite' => rand(1, 100),
    ],
    [
        'squadra_casa' => 'lazio',
        'squadra_ospite' => 'Samp',
        'punti_casa' => rand(1, 100),
        'punti_ospite' => 20,
    ],
    [
        'squadra_casa' => 'fiorentina',
        'squadra_ospite' => 'torino',
        'punti_casa' => rand(1, 100),
        'punti_ospite' => rand(1, 100),
    ]
]




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    for ($i=0; $i < count($squadre); $i++) { 
        $squadra = $squadre[$i];
        
        ?>
        
        <p><?php echo  $squadra["squadra_casa"]?> - <?php echo $squadra["squadra_ospite"] ?> | <?php $squadra["punti_casa"]?> - <?php $squadra["punti_ospite"] ?></p>
    <?php }
    ?>

</body>
</html>