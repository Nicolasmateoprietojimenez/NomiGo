<?php

include('interfaceCrud.php');
include ('../conexion/conexion.php');
include ('../modelo/familia.php'); // Cambiado a modelo familia

class MetodosFamilia extends Conexion implements crudgox{

    public function registrar(familia $familiar) { // Cambiado a familia
        try {
            if ($this->getCnx() != null) {
                $documento_fam = $familiar->getDocumentoFam(); // Cambiado a documento_fam
                $nombre = $familiar->getNombre();
                $apellido = $familiar->getApellido();
                $sexo = $familiar->getSexo();
                $parentezco = $familiar->getParentezco();
                $fecha_nac = $familiar->getFechaNac(); // Cambiado a fecha_nac
                
                $sql = "INSERT INTO familia VALUES (?, ?, ?, ?, ?, ?)"; // Cambiado a familia
                $stmt = $this->getCnx()->prepare($sql);
                $stmt->execute([$documento_fam, $nombre, $apellido, $sexo, $parentezco, $fecha_nac]); // Cambiado a familia        
            } else {
                echo $this->getCnx().' Es nulo <br>';
            }
        } catch(PDOException $p) {
            echo $p->getMessage().'***********************';
        }
    }
    
    public function modificar(familia $familiar){ // Cambiado a familia       
        $nombre = $familiar->getNombre();
        $apellido = $familiar->getApellido();
        $sexo = $familiar->getSexo();
        $parentezco = $familiar->getParentezco();
        $fecha_nac = $familiar->getFechaNac(); // Cambiado a fecha_nac
        
        try {
            $stmt=$this->getCnx()->prepare("UPDATE familia " . // Cambiado a familia
                                           "SET nombre = ?, " .
                                           "apellido = ?, " .
                                           "sexo = ?, " . // Cambiado a sexo
                                           "parentezco = ?, " . // Cambiado a parentezco
                                           "fecha_nac = ? " . // Cambiado a fecha_nac
                                           "WHERE documento_fam = ?"); // Cambiado a documento_fam
            $stmt->execute([$nombre, $apellido, $sexo, $parentezco, $fecha_nac, ]); // Cambiado a familia
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
            $stmt = $this->getCnx()->prepare("SELECT * FROM familia"); // Cambiado a familia
            $lista = array();
            $stmt->execute();
            foreach ($stmt as $key ) {           
                $familiar = new familia(null, null, null, null, null, null); // Cambiado a familia
                $familiar->setDocumentoFam($key['documento_fam']); // Cambiado a documento_fam
                $familiar->setNombre($key['nombre']);
                $familiar->setApellido($key['apellido']);
                $familiar->setSexo($key['sexo']); // Cambiado a sexo
                $familiar->setParentezco($key['parentezco']); // Cambiado a parentezco
                $familiar->setFechaNac($key['fecha_nac']); // Cambiado a fecha_nac
                array_push($lista, $familiar);            
            }        
            //$this->getCnx()->close();
        } catch(PDOException $e){
            $e->getMessage().'error en listar de DaoAprendizImpl';
        } 
        return $lista;       
    } 

}

?>
