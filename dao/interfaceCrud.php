<?php 
interface crudgo{
    public function registrar(usuario $a);
    public function modificar(usuario $a);
    public function eliminar(usuario $a);
    //public function buscar($campo,$dato);
    public function listar();
}

interface crudgox{
    public function registrar(Familia $familiar);
    public function modificar(Familia $familiar);
    public function eliminar(Familia $familiar);
    //public function buscar($campo,$dato);
    public function listar();
}

interface crudgoempe{
    public function registrar(Empleado $empe);
    public function modificar(Empleado $empe);
    public function eliminar(Empleado $empe);
    //public function buscar($campo,$dato);
    public function listar();
}

?>