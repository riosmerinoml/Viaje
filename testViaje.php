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

include 'Viaje.php';
include 'Pasajero.php';
include 'ResponsableV.php';


function elegirOpcionDeMenu() {
    //La función muestra por pantalla un menú de opciones y devuelve la opción elegida.
    echo "\n";
    echo "Elija una opción: \n";
    echo "1 Ingresar viaje\n";
    echo "2 Ingresar pasajeros\n";
    echo "3 Ingresar responsable\n";
    echo "4 Mostrar viaje\n";
    echo "5 Mostrar pasajeros en viaje\n";
    echo "6 Mostrar responsable\n";
    echo "7 Modificar viaje\n";
    echo "8 Modificar pasajero en viaje\n";
    echo "9 Modificar responsable\n";
    echo "10 Finalizar\n";
    $eleccion = trim(fgets(STDIN));
    return $eleccion;
}

//Script
do {
    $opcion = elegirOpcionMenu();
    switch ($opcion) {

        case 1:
            
            break;

        case 2:

            break;

        case 3:

            break;

        case 4:

            break;

        case 5:

            break;

        case 6:

            break;

        case 7:
            
            break;

        case 8:

            break;

        case 9:

            break;

        case 10:

            break;
    }
} while (opcion != 10);

?>