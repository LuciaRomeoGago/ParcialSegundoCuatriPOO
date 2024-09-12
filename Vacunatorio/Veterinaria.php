<?php
class Veterinaria {
    private string $nombre;
    private string $direccion;
    private string $telefono;

    public function __construct(string $nombre, string $direccion, string $telefono) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function getTelefono(): string {
        return $this->telefono;
    }
}