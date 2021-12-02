<?php

$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolorem soluta corrupti qui in ut ipsam quidem voluptatibus fuga. nihil est dignissimos recusandae dolores assumenda vel, non, natus iste modi?
Sed voluptatibus repudiandae enim inventore. molestiae est molestias voluptatem perspiciatis. maiores obcaecati fuga voluptas expedita esse, nihil labore tenetur praesentium dolores atque eius at incidunt? Perspiciatis numquam quam eveniet ratione?
Veritatis quas magnam unde, officia iusto rerum incidunt, itaque similique explicabo at suscipit perferendis repudiandae totam. hic reprehenderit asperiores accusantium quos nihil provident saepe accusamus eius? Ipsa nostrum praesentium nulla.";

$arr = explode(".",$paragrafo);


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
    <p><?php echo $arr[0] ?></p>
    <p><?php echo $arr[1] ?></p>
    <p><?php echo $arr[2] ?></p>
    <p><?php echo $arr[3] ?></p>
    <p><?php echo $arr[4] ?></p>
    <p><?php echo $arr[5] ?></p>
    <p><?php echo $arr[6] ?></p>
</body>
</html>