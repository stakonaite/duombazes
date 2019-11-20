<?php


namespace dogs;
include_once 'Animals.php';
use animal\Animals;

class Dogs extends Animals
{
public function dog($tattoo){
    $this->tattoo = $tattoo;
}
}