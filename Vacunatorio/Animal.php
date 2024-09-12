<?php

 class Animal {
    protected string $nombre;
    protected DateTime $fechaNacimiento;
    protected int $tipoAnimal;
    private array $vacunaciones = [];

    public function __construct(string $nombre, DateTime $fechaNacimiento, int $tipoAnimal) {
        $this->nombre = $nombre;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->tipoAnimal = $tipoAnimal;
    }

    public function clone(): Animal {
        $clon = new Animal($this->nombre, $this->fechaNacimiento, $this->tipoAnimal);
        $clon->vacunaciones = $this->vacunaciones; 
        return $clon;
        //el tema de esta funcion asi como esta, es que si se crea un cambio en la lista de vacunacion
        // de un objeto, modifica tambien la otra, como hago para que no pase?¿ 
        //deberia hacer que vacunacion tambien tuviera un metodo clone ?¿ i suppose
    }

    public function agregarVacunacion(Vacunacion $vacunacion): void {
        $this->vacunaciones[] = $vacunacion;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getVacunaciones(): array {
        return $this->vacunaciones;
    }
}