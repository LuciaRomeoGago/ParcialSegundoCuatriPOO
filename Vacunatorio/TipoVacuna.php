<?php 
class TipoVacuna {
    private int $tipo; 
    private string $nombre; 

    public function __construct(int $tipo, string $nombre) {
        $this->tipo = $tipo;
        $this->nombre = $nombre;
    }

    public function getTipo(): int {
        return $this->tipo;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
}