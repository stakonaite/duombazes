<?php


namespace bird;

include_once 'Animals.php';
use animal\Animals;

class Birds extends Animals
{
public function bird($ring){
    $ring->ring = $ring;
}
}