<?php 

include('interfaceCrud.php');
include ('../conexion/conexion.php');
include ('../modelo/empleado.php');

class MetodosEmpleado extends Conexion implements crudgoempe{

    public function registrar(Empleado $empe) { 
        try {
            if ($this->getCnx() != null) {
                $id_empleado = $empe->getIdEmpleado();
                $documento = $empe->getDocumento();
                $documento_fam = $empe->getDocumentoFam();
                $salario_base = $empe->getSalarioBase();
                
                $sql = "INSERT INTO empleado VALUES (?, ?, ?, ?)"; 
                $stmt = $this->getCnx()->prepare($sql);
                $stmt->execute([$id_empleado, $documento, $documento_fam, $salario_base]); 
            } else {
                echo $this->getCnx().' Es nulo <br>';
            }
        } catch(PDOException $p) {
            echo $p->getMessage().'***********************';
        }
    }
    
    public function modificar(Empleado $empe){     
        $id_empleado = $empe->getIdEmpleado();
        $documento = $empe->getDocumento();
        $documento_fam = $empe->getDocumentoFam();
        $salario_base = $empe->getSalarioBase();
        
        try {
            $stmt=$this->getCnx()->prepare("UPDATE empleado " . 
                                           "SET documento = ?, " .
                                           "documento_fam = ?, " .
                                           "salario_base = ? " . 
                                           "WHERE id_empleado = ?"); 
            $stmt->execute([$documento, $documento_fam, $salario_base, $id_empleado]); 
        } catch(PDOException $e) {
            echo "Error al modificar: " . $e->getMessage();
        }
    }

    public function eliminar(Empleado $empe){     
        $id_empleado = $empe->getIdEmpleado();
        $stmt=$this->getCnx()->prepare("DELETE FROM empleado WHERE id_empleado = ?"); 
        $stmt->execute([$id_empleado]);       
    }

    public function listar(){
        $lista = null;
        try{    
            $stmt = $this->getCnx()->prepare("SELECT * FROM empleado"); 
            $lista = array();
            $stmt->execute();
            foreach ($stmt as $key ) {           
                $empleado = new Empleado(null, null, null, null); 
                $empleado->setIdEmpleado($key['id_empleado']);
                $empleado->setDocumento($key['documento']);
                $empleado->setDocumentoFam($key['documento_fam']);
                $empleado->setSalarioBase($key['salario_base']);
                array_push($lista, $empleado);            
            }        

        } catch(PDOException $e){
            $e->getMessage().'error en listar de DaoAprendizImpl';
        } 
        return $lista;       
    } 

}

?>
