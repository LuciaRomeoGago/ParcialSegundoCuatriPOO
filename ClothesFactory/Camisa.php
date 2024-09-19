<?php

abstract class Camisa {
    protected $cuello;
    protected $manga;
    protected $corte;
    protected $color;

    public function __construct($cuello,$manga,$corte,$color){
        $this->cuello=$cuello;
        $this->manga=$manga;
        $this->corte=$corte;
        $this->color=$color;
    }

    public function __toString(){
        return "Camisa: {$this->cuello}, {$this->manga}, {$this->corte}, de color {$this->color}";
    }
}