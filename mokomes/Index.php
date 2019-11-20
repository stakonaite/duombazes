<?php

include('Tables.php');
use table\Tables;

$db = New Tables();
$sql_key = "SELECT * FROM dovanusarasas";
$dovanusarasas = $db->select($sql_key);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
<table>
    <?php getTable($dovanusarasas); ?>
</table>
</body>
</html>
