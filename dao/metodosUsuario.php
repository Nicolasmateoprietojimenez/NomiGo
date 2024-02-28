<?php

include('interfaceCrud.php');
include ('../conexion/conexion.php');
include ('../modelo/familia.php');

class nomiGo extends Conexion implements crudgo{

    public function registrar(usuario $a) { 
        try {
            if ($this->getCnx() != null) {
                $docu = $a->getDocumento();
                $nom = $a->getNombre();
                $ape = $a->getApellido();
                $lugarN = $a->getLugarN();
                $fechaN = $a->getFechaN();
                $fechaE = $a->getFechaE();
                $sexo = $a->getGenero();
                $correo = $a->getCorreo();
                $nombreU = $a->getNombreU();
                $contrasena = $a->getContrasena();
                
                $sql = "INSERT INTO usuario (documento, nombre, apellido, lugar_nac, fecha_nac, fecha_exp, genero, correo, nombre_usu, contrasena) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $this->getCnx()->prepare($sql);
                $stmt->execute([$docu, $nom, $ape, $lugarN, $fechaN, $fechaE, $sexo, $correo, $nombreU, $contrasena]);        
            } else {
                echo $this->getCnx().' Es nulo <br>';
            }
        } catch(PDOException $p) {
            echo $p->getMessage().'***********************';
        }
    }
    
    public function modificar(usuario $a){        
        $docu = $a->getDocumento();
        $nom = $a->getNombre();
        $ape = $a->getApellido();
        $lugarN = $a->getLugarN();
        $fechaN = $a->getFechaN();
        $fechaE = $a->getFechaE();
        $sexo = $a->getGenero();
        $correo = $a->getCorreo();
        $nombreU = $a->getNombreU();
        $contrasena = $a->getContrasena();
        
        try {
            $stmt = $this->getCnx()->prepare("UPDATE usuario " .
                                           "SET nombre = ?, " .
                                           "apellido = ?, " .
                                           "lugar_nac = ?, " .
                                           "fecha_nac = ?, " .
                                           "fecha_exp = ?, " .
                                           "genero = ?, " .
                                           "correo = ?, " .
                                           "nombre_usu = ?, " .
                                           "contrasena = ? " .
                                           "WHERE documento = ?");
            $stmt->execute([$nom, $ape, $lugarN, $fechaN, $fechaE, $sexo, $correo, $nombreU, $contrasena, $docu]);        
        } catch(PDOException $e) {
            echo "Error al modificar: " . $e->getMessage();
        }
    }
    
    public function eliminar(usuario $a){        
        $docu = $a->getDocumento();
        $stmt = $this->getCnx()->prepare("DELETE FROM usuario WHERE documento = ?");
        $stmt->execute([$docu]);        
    }
    
    public function listar(){
        $lista = null;
        try{    
            $stmt = $this->getCnx()->prepare("SELECT * FROM usuario");
            $lista = array();
            $stmt->execute();
            foreach ($stmt as $key ) {           
                $a = new usuario(null,null,null,null,null,null,null,null,null,null);
                $a->setDocumento($key['documento']);
                $a->setNombre($key['nombre']);
                $a->setApellido($key['apellido']);
                $a->setLugarN($key['lugar_nac']);
                $a->setFechaN($key['fecha_nac']);
                $a->setFechaE($key['fecha_exp']);
                $a->setGenero($key['genero']);
                $a->setCorreo($key['correo']);
                $a->setNombreU($key['nombre_usu']);
                $a->setContrasena($key['contrasena']);           
                array_push($lista,$a);            
            }        
        }catch(PDOException $e){
            $e->getMessage().'error en listar de DaoAprendizImpl';
        } 
        return $lista;       
    }
    

}














?>