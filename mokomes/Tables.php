<?php

namespace table;
include ('Database.php');
use db\Database;

class Tables extends Database
{
    public function getTable($array)
{
    foreach ($array as $arrayMini) {
        print '<tr>';
        foreach ($arrayMini as $value) {
            print '<td>' . $value . '</td>';
        }
        print '</tr>';
    }
}
}
