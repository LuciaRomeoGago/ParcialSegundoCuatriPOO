<?php
class Vacunacion {
    private DateTime $fechaVacunacion;
    private int $tipoVacuna; 

    public function __construct(DateTime $fechaVacunacion, int $tipoVacuna) {
        $this->fechaVacunacion = $fechaVacunacion;
        $this->tipoVacuna = $tipoVacuna;
    }

    public function clone(): Vacunacion {
        $clon = new Vacunacion ($this->fechaVacunacion, $this->tipoVacuna);
        return $clon;
    } // aca cree la function clone de vacunacion, supongo que ahora serian independientes las vacunas
    // de un animal que las del otro ?¿

    public function getFechaVacunacion(): DateTime {
        return $this->fechaVacunacion;
    }

    public function getTipoVacuna(): int {
        return $this->tipoVacuna;
    }
}