<?php

class Media{

    private $b1, $b2, $b3;

public function Calcular(){

    $media = $this->b1 + $this->b2 + $this->b3 / 3;
    return $media;

}
}