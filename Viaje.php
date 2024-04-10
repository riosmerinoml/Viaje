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

include 'Pasajero.php';
include 'ResponsableV.php';

class Viaje{
    // Representación de una clase viaje con su codigo, destino, cantidad máxima de pasajeros y un arreglo de pasajeros.
    private $codigoViaje;
    private $destino;
    private $cantMaxPasajeros;
    private $coleccionPasajeros;


    public function __construct($paramCodigoViaje, $paramDestino, $paramCantMaxPasajeros, $paramColeccionPasajeros){
        // Métotodo constructor de la clase Viaje.
        $this->codigoViaje = $paramCodigoViaje;
        $this->destino = $paramDestino;
        $this->cantMaxPasajeros = $paramCantMaxPasajeros;
        $this->coleccionPasajeros = $paramColeccionPasajeros;
    }


    public function getCodigoViaje(){
        return $this->codigoViaje;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }
    public function getColeccionPasajeros(){
        return $this->coleccionPasajeros;
    }

    public function setCodigoViaje($paramCodigoViaje){
        $this->codigoViaje = $paramCodigoViaje;
    }
    public function setDestino($paramDestino){
        $this->destino = $paramDestino;
    }
    public function setCantMaxPasajeros($paramCantMaxPasajeros){
        $this->cantMaxPasajeros = $paramCantMaxPasajeros;
    }
    public function setColeccionPasajeros($paramColeccionPasajeros){
        $this->coleccionPasajeros = $paramColeccionPasajeros;
    }

    public function __toString(){
        return "\nCódigo de Viaje: ".$this->getCodigoViaje().
                "\nDestino: ".$this->getDestino().
                "\nCantidad máxima de pasajeros: ".$this->getCantMaxPasajeros().
                "\nPasajeros: ".$this->getColeccionPasajeros()."\n";
    }


    function ingresarViaje(){
        $codigoViajeAux = 0;
        $destinoAux = " ";
        $cantMaxPasajerosAux = 0;
        echo "\n";
        echo "Ingrese el código de viaje: ";
        $codigoViajeAux = trim(fgets(STDIN));
        echo "\n";
        echo "Ingrese el destino: ";
        $destinoAux = trim(fgets(STDIN));
        echo "\n";
        echo "Ingrese la cantidad máxima de pasajeros: ";
        $cantMaxPasajerosAux = trim(fgets(STDIN));
        $objViaje = new Viaje($codigoViajeAux, $destinoAux, $cantMaxPasajerosAux, $coleccionPasajeros);
        return $objViaje;
    }
    
    function existePasajeroEnViaje($objViajeDondeVerifico, $objPasajeroAVerificar){
        //La función recibe un objeto Viaje y un objeto Pasajero y devuelve un valor booleano.
        //En caso de existir el pasajero en la colección de pasajeros del viaje devuelve verdadero.
        //En caso contrario devuelve false.
        $i = 0;
        $existe = false;
        $coleccionPasajerosAux = $objViajeDondeVerifico->getColeccionPasajeros();

        do {
            $objPasajeroAux = $coleccionPasajerosAux[i];
            if ($objPasajeroAux->getNumDocumento() == $objPasajeroAVerificar->getNumDocumento()) {
                $existe = true;
            }
            $i++;
        } while ($existe == false && count($coleccionPasajerosAux) > $i);
        return $existe;
    }

    function ingresarPasajeroAViaje($objViaje){
        //La función recibe un objeto Viaje y devuleve el mismo con un pasajero nuevo ingresado por el usuario.
        //En caso de que el pasajero ya exista no lo ingresa.
        $objPasajeroAux = ingresarPasajero();
        $existe = existePasajeroEnViaje($objViaje, $objPasajeroAux);
        if ($existe) {
            echo "\nEl pasajero ya se encuentra en el viaje.\n";
        } else {
            $coleccionPasajerosAux = $objViaje->getColeccionPasajeros();
            $cantPasajeros = count($coleccionPasajerosAux);
            $coleccionPasajerosAux[$cantPasajeros] = $objPasajeroAux;
            $objViaje->setColeccionPasajeros($coleccionPasajerosAux);
            echo "\nEl pasajero fué ingresado de manera exitosa.\n";
        }    
        return $objViaje;
    }

    function ingresarTodosLosPasajerosAViaje($objViaje){
        //La función recibe un objeto Viaje e ingresa todos los pasajeros al mismo.
        //En caso de que el pasajero ya exista no lo ingresa.
        echo "\n¿Desea ingresar un nuevo pasajero al viaje?\n";
        echo "¿Si (s) o No (n)?";
        $opcion = trim(fgets(STDIN));
        while ($opcion == s){
            $objViaje = ingresarPasajeroAViaje($objViaje);
        }
        return $objViaje;
    }
    

}










?>