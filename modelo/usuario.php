<?php
class usuario{
    private $documento;
    private $nombre;
    private $apellido;
    private $lugarN;
    private $fechaN;
    private $fechaE;
    private $genero;
    private $correo;
    private $nombreU;
    private $contrasena;

    public function __construct($documento, $nombre, $apellido, $lugarN, $fechaN, $fechaE, $genero, $correo, $nombreU, $contrasena) {
        $this->documento = $documento;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->lugarN = $lugarN;
        $this->fechaN = $fechaN;
        $this->fechaE = $fechaE;
        $this->genero = $genero;
        $this->correo = $correo;
        $this->nombreU = $nombreU;
        $this->contrasena = $contrasena;
    }

    // Getters
    public function getDocumento() {
        return $this->documento;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getLugarN() {
        return $this->lugarN;
    }

    public function getFechaN() {
        return $this->fechaN;
    }

    public function getFechaE() {
        return $this->fechaE;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getNombreU() {
        return $this->nombreU;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    // Setters
    public function setDocumento($documento) {
        $this->documento = $documento;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setLugarN($lugarN) {
        $this->lugarN = $lugarN;
    }

    public function setFechaN($fechaN) {
        $this->fechaN = $fechaN;
    }

    public function setFechaE($fechaE) {
        $this->fechaE = $fechaE;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setNombreU($nombreU) {
        $this->nombreU = $nombreU;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }
}

