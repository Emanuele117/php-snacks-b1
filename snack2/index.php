

<?php 

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

var_dump(strpos($email, '@'), strpos($email, '.'));

if(strpos($email, '@') && strpos($email, '.') ){
    echo 'ok'
}else{
    echo 'ko'
};






?> 