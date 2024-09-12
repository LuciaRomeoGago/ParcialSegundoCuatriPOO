<?php 
require_once("TipoAnimal.php");
require_once("TipoVacuna.php");
require_once("Vacunacion.php");
require_once("Animal.php"); 

// Crear tipos de animales y vacunas
$tipoPerro = new TipoAnimal(1, "Perro");
$tipoVacunaRabia = new TipoVacuna(1, "Rabia");

// Crear un animal original
$perroOriginal = new Animal("Rex", new DateTime('2019-01-15'), $tipoPerro->getTipo());
$perroOriginal->agregarVacunacion(new Vacunacion(new DateTime('2024-01-10'), $tipoVacunaRabia->getTipo()));

// Clonar el perro
$perroClonado = $perroOriginal->clone();
$perroClonado->agregarVacunacion(new Vacunacion(new DateTime('2024-02-15'), 2)); // Tipo de vacuna 2

// Mostrar información del perro original
echo "Perro Original:\n";
echo "Nombre: " . $perroOriginal->getNombre() . "\n";
echo "Vacunaciones: \n";
foreach ($perroOriginal->getVacunaciones() as $vacunacion) {
    echo "- Fecha: " . $vacunacion->getFechaVacunacion()->format('Y-m-d') . ", Tipo de Vacuna: " . $vacunacion->getTipoVacuna() . "\n";
}

// Mostrar información del perro clonado
echo "\nPerro Clonado:\n";
echo "Nombre: " . $perroClonado->getNombre() . "\n";
echo "Vacunaciones: \n";
foreach ($perroClonado->getVacunaciones() as $vacunacion) {
    echo "- Fecha: " . $vacunacion->getFechaVacunacion()->format('Y-m-d') . ", Tipo de Vacuna: " . $vacunacion->getTipoVacuna() . "\n";
}