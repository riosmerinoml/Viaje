<?php
/**
 *  La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje
 * se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
 *  Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase
 * (incluso los datos de los pasajeros). Utilice clases y arreglos  para   almacenar la información correspondiente a los pasajeros.
 * Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.
 *  Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información
 * del viaje, modificar y ver sus datos.
 *  Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento
 * y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. También se desea guardar
 * la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre el número
 * de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.
 *  Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar
 * la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar
 * que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.
 */

class ResponsableV{
    //Representación de una clase Responsable de viaje con su número de empleado, número de licencia, nombre y apellido.
    private $numEmpleado;
    private $numLicencia;
    private $nombreResponsableV;
    private $apellidoResponsableV;

    public function __construct($paramNumEmpleado, $paramNumLicencia, $paramNombreResponsableV, $paramApellidoResponsableV){
        $this->numEmpleado = $paramNumEmpleado;
        $this->numLicencia = $paramNumLicencia;
        $this->nombreResponsableV = $paramNombreResponsableV;
        $this->apellidoResponsableV = $paramApellidoResponsableV;
    }

    public function getNumEmpleado(){
        return $this->numEmpleado;
    }
    public function getNumLicencia(){
        return $this->numLicencia;
    }
    public function getNombreResponsableV(){
        return $this->nombreResponsableV;
    }
    public function getApellidoResponsableV(){
        return $this->apellidoResponsableV;
    }

    public function setNumEmpleado($paramNumEmpleado){
        $this->numEmpleado = $paramNumEmpleado;
    }
    public function setNumLicencia($paramNumLicencia){
        $this->numLicencia = $paramNumLicencia;
    }
    public function setNombreResponsableV($paramNombreResponsableV){
        $this->nombreResponsableV = $paramNombreResponsableV;
    }
    public function setApellidoResponsableV($paramApellidoResponsableV){
        $this->apellidoResponsableV = $paramApellidoResponsableV;
    }

    public function __toString(){
        echo "\n";
        return $this->getNumEmpleado();
        echo "\n";
        return $this->getNumLicencia();
        echo "\n";
        return $this->getNombreResponsableV();
        echo "\n";
        return $this->getApellidoResponsableV();
        echo "\n";
    }


    function ingresarResponsableV(){
        $numEmpleadoAux = 0;
        $numLicenciaAux = 0;
        $nombreResponsableVAux = " ";
        $apellidoResponsableVAux = " ";
        echo "\n";
        echo "Ingrese el numero de empleado: ";
        $numEmpleadoAux = trim(fgets(STDIN));
        echo "\n";
        echo "Ingrese el número de licencia: ";
        $numLicenciaAux = trim(fgets(STDIN));
        echo "\n";
        echo "Ingrese el nombre del responsable: ";
        $nombreResponsableVAux = trim(fgets(STDIN));
        echo "\n";
        echo "Ingrese el apellido del responsable ";
        $apellidoResponsableVAux = trim(fgets(STDIN));
        $objResponsableV = new ResponsableV($numEmpleadoAux, $numLicenciaAux, $nombreResponsableVAux, $apellidoResponsableVAux);
        return $objResponsableV;
    }
    

}




?>