<?php

$array_squadre = [
    [
        'squadra_casa' => 'Roma',
        'squadra_ospite' => 'inter',
        'punti_casa' => 55,
        'punti_ospite' => 60,
    ],
    [
        'squadra_casa' => 'lazio',
        'squadra_ospite' => 'Samp',
        'punti_casa' => 50,
        'punti_ospite' => 20,
    ],
    [
        'squadra_casa' => 'fiorentina',
        'squadra_ospite' => 'torino',
        'punti_casa' => 25,
        'punti_ospite' => 35,
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
    for ($i=0; $i < count($array_squadre); $i++) { 
        $partita = $array_squadre[$i];
        
        ?>
        
        <p><?php echo  $partita["squadra_casa"]?> - <?php echo $partita["squadra_ospite"] ?> | <?php $partita["punti_casa"]?> - <?php $parita["punti_ospite"] ?></p>
    <?php }
    ?>

</body>
</html>