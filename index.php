<?php

$text= 'Ciao a tutti';

echo $text;

var_dump($text);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h4>Il testo della stringa è "<?php echo $text ?>"</h4>
    <h4>La stringa text è lunga : <?php echo strlen($text) ?> </h4>
</body>
</html>