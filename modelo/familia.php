<?php
class familia{
    private $documento_fam;
    private $nombre;
    private $apellido;
    private $sexo;
    private $parentezco;
    private $fecha_nac;

    public function __construct($documento_fam, $nombre, $apellido, $sexo, $parentezco, $fecha_nac) {
        $this->documento_fam = $documento_fam;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->parentezco = $parentezco;
        $this->fecha_nac = $fecha_nac;
    }

    public function getDocumentoFam() {
        return $this->documento_fam;
    }

    public function setDocumentoFam($documento_fam) {
        $this->documento_fam = $documento_fam;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getParentezco() {
        return $this->parentezco;
    }

    public function setParentezco($parentezco) {
        $this->parentezco = $parentezco;
    }

    public function getFechaNac() {
        return $this->fecha_nac;
    }

    public function setFechaNac($fecha_nac) {
        $this->fecha_nac = $fecha_nac;
    }
}


?>
