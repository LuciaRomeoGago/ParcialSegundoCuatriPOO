<?php
require_once ('Camisa.php');
require_once('CamisaClasica.php');
require_once('FactoryCamisa.php');
require_once('FactoryCamisaClasica.php');

$factoryClasica= new FactoryCamisaClasica();
$camisaClasica= $factoryClasica->crearCamisa("Gris");
echo $camisaClasica;