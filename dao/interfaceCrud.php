<?php 
interface crudgo{
    public function registrar(usuario $a);
    public function modificar(usuario $a);
    public function eliminar(usuario $a);
    //public function buscar($campo,$dato);
    public function listar();
}
interface crudgox{
    public function registrar(familia $familiar);
    public function modificar(familia $familiar);
    public function eliminar(familia $familiar);
    //public function buscar($campo,$dato);
    public function listar();
}
?>