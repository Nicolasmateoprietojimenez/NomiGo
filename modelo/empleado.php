<?php 

class Empleado {
    private $id_empleado;
    private $documento;
    private $documento_fam;
    private $salario_base;

    public function __construct($id_empleado, $documento, $documento_fam, $salario_base) {
        $this->id_empleado = $id_empleado;
        $this->documento = $documento;
        $this->documento_fam = $documento_fam;
        $this->salario_base = $salario_base;
    }

    public function getIdEmpleado() {
        return $this->id_empleado;
    }

    public function setIdEmpleado($id_empleado) {
        $this->id_empleado = $id_empleado;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function setDocumento($documento) {
        $this->documento = $documento;
    }

    public function getDocumentoFam() {
        return $this->documento_fam;
    }

    public function setDocumentoFam($documento_fam) {
        $this->documento_fam = $documento_fam;
    }

    public function getSalarioBase() {
        return $this->salario_base;
    }

    public function setSalarioBase($salario_base) {
        $this->salario_base = $salario_base;
    }
}




?>