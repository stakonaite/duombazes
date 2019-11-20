<?php

include 'Dogs.php';
include 'Birds.php';

use dogs\Dogs;
use bird\Birds;

$paukstis = New Birds('Paukstukas', 'Juodas', '2');
$suo = New Dogs('Pupa', 'Ruda', '4');

$paukstis->bird('zieduotas');
$suo->dog('gelyte');

var_dump($paukstis, $suo);


?>


