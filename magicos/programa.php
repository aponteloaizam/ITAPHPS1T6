<?php

class Programa {

    public string $nombre;
    public string $desarrollador;

    public function __construct(string $nombre, string $desarrollador) {
        $this->nombre = $nombre;
        $this->desarrollador = $desarrollador;
    }

    public function nombrar(): string {
        return __CLASS__ . ": " . $this->nombre;
    }

    public function encontrar(): string {
        return "La ruta del programa es " . __FILE__;
    }

    public function __toString() {
        return "El programa " .  $this->nombre . " ha sido desarrollado por " . $this->desarrollador . ".";
    }

}

?>