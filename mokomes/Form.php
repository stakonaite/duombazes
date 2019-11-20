<?php

namespace input;

use db\Database;
class Form extends Database
{
    public function Database()
    {
        $db = New Database();
        $sql = "SELECT `dish_name` FROM `patiekalai`";
    }
}