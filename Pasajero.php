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

 class Pasajero{
//Representación de una clase Pasajero con el nombre, apellido, número de documento y teléfono.
    private $nombrePasajero;
    private $apellidoPasajero;
    private $numDocumento;
    private $telefono;

    public function __construct($paramNombrePasajero, $paramApellidoPasajero, $paramNumDocumento, $paramTelefono){
        //Método constructor de la clase Pasajero.
        $this->nombrePasajero = $paramNombrePasajero;
        $this->apellidoPasajero = $paramApellidoPasajero;
        $this->numDocumento = $paramNumDocumento;
        $this->telefono = $paramTelefono;
    }

    public function getNombrePasajero(){
        return $this->nombrePasajero;
    }
    public function getApellidoPasajero(){
        return $this->apellidoPasajero;
    }
    public function getNumDocumento(){
        return $this->numDocumento;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    public function setNombrePasajero($paramNombrePasajero){
        $this->nombrePasajero = $paramNombrePasajero;
    }
    public function setApellidoPasajero($paramApellidoPasajero){
        $this->apellidoPasajero = $paramApellidoPasajero;
    }
    public function setNumDocumento($paramNumDocumento){
        $this->numDocumento = $paramNumDocumento;
    }
    public function setTelefono($paramTelefono){
        $this->telefono = $paramTelefono;
    }

    public function __toString(){
        echo "\n";
        return $this->getNombrePasajero();
        echo "\n";
        return $this->getApellidoPasajero();
        echo "\n";
        return $this->getNumDocumento();
        echo "\n";
        return $this->getTelefono();
        echo "\n";
    }


    function ingresarPasajero(){
        $nombrePasajeroAux = " ";
        $apellidoPasajeroAux = " ";
        $numDocumentoAux = 0;
        $telefonoAux = 0;
        echo "\n";
        echo "Ingrese el nombre del pasajero: ";
        $nombrePasajeroAux = trim(fgets(STDIN));
        echo "\n";
        echo "Ingrese el apellido del pasajero: ";
        $apellidoPasajeroAux = trim(fgets(STDIN));
        echo "\n";
        echo "Ingrese el número de documento: ";
        $numDocumentoAux = trim(fgets(STDIN));
        echo "\n";
        echo "Ingrese el teléfono: ";
        $telefonoAux = trim(fgets(STDIN));
        $objPasajero = new Pasajero($nombrePasajeroAux, $apellidoPasajeroAux, $numDocumentoAux, $telefonoAux);
        return $objPasajero;
    }
    

 }


?>