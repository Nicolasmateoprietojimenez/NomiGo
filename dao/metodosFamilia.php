<?php

include('interfaceCrud.php');
include ('../conexion/conexion.php');
include ('../modelo/familia.php');

class MetodosFamilia extends Conexion implements crudgox{

    public function registrar(Familia $familiar) { 
        try {
            if ($this->getCnx() != null) {
                $documento_fam = $familiar->getDocumentoFam();
                $nombre = $familiar->getNombre();
                $apellido = $familiar->getApellido();
                $sexo = $familiar->getSexo();
                $parentezco = $familiar->getParentezco();
                $fecha_nac = $familiar->getFechaNac(); 
                
                $sql = "INSERT INTO familia VALUES (?, ?, ?, ?, ?, ?)"; 
                $stmt = $this->getCnx()->prepare($sql);
                $stmt->execute([$documento_fam, $nombre, $apellido, $sexo, $parentezco, $fecha_nac]); 
            } else {
                echo $this->getCnx().' Es nulo <br>';
            }
        } catch(PDOException $p) {
            echo $p->getMessage().'***********************';
        }
    }
    
    public function modificar(familia $familiar){     
        $nombre = $familiar->getNombre();
        $apellido = $familiar->getApellido();
        $sexo = $familiar->getSexo();
        $parentezco = $familiar->getParentezco();
        $fecha_nac = $familiar->getFechaNac(); // Cambiado a fecha_nac
        
        try {
            $stmt=$this->getCnx()->prepare("UPDATE familia " . 
                                           "SET nombre = ?, " .
                                           "apellido = ?, " .
                                           "sexo = ?, " . 
                                           "parentezco = ?, " . 
                                           "fecha_nac = ? " .
                                           "WHERE documento_fam = ?"); 
            $stmt->execute([$nombre, $apellido, $sexo, $parentezco, $fecha_nac, ]); 
        } catch(PDOException $e) {
            echo "Error al modificar: " . $e->getMessage();
        }
    }

    public function eliminar(familia $familiar){ // Cambiado a familia      
        $documento_fam = $familiar->getDocumentoFam(); // Cambiado a documento_fam
        $stmt=$this->getCnx()->prepare("DELETE FROM familia WHERE documento_fam = ?"); // Cambiado a familia
        $stmt->execute([$documento_fam]); // Cambiado a documento_fam       
    }

    public function listar(){
        $lista = null;
        try{    
            $stmt = $this->getCnx()->prepare("SELECT * FROM familia"); 
            $lista = array();
            $stmt->execute();
            foreach ($stmt as $key ) {           
                $familiar = new familia(null, null, null, null, null, null); 
                $familiar->setDocumentoFam($key['documento_fam']);
                $familiar->setNombre($key['nombre']);
                $familiar->setApellido($key['apellido']);
                $familiar->setSexo($key['sexo']);
                $familiar->setParentezco($key['parentezco']);
                $familiar->setFechaNac($key['fecha_nac']);
                array_push($lista, $familiar);            
            }        

        } catch(PDOException $e){
            $e->getMessage().'error en listar de DaoAprendizImpl';
        } 
        return $lista;       
    } 

}

?>
