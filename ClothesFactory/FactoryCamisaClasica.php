<?php
 class FactoryCamisaClasica implements FactoryCamisa {
    public function crearCamisa($color): Camisa {
        return new CamisaClasica($color);
    }
 }