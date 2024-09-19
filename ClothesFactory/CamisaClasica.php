<?php
  class CamisaClasica extends Camisa {
    public function __construct($color){
        parent::__construct(" cuello ingles","manga larga","corte regular", $color);
    }
  }