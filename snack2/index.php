

<?php 

// verificare la lunghezza di name con strlen()
// verificare che mail contenga un "." e una "@" con strpos()
// verificare che age sia un numero con is_int()


if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['mail'])) {
    
    $name = $_GET['name'];
    $age = $_GET['age'];
    $mail = $_GET['mail'];

    var_dump($name, $age, $mail);

    if(strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') && strpos($mail, '.')) {
        echo 'accesso riuscito';
    } else {
        echo ' accesso negato';
    }
};












?> 