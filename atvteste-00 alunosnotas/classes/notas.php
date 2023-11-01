<?php

class Notas{
    private $matri, $n1, $n2, $media;

    public function getMatri(){
        return $this->matri;
    }
    public function setMatri($matris){
        $this->matri = $matris;
    }

    public function getN1(){
        return $this->n1;
    }
    public function setN1($n1s){
        $this->n1 = $n1s;
    }

    public function getN2(){
        return $this->n2;
    }
    public function setN2($n2s){
        $this->n2 = $n2s;
    }

    public function getMedia(){
        return $this->media;
    }
    public function setMedia($medias){
        $this->media = $medias;
    }

    public function MediaNotas()
    { 
        $Media = ($this->N1 + $this->N2) / 2;
        return $Media;
    }
}