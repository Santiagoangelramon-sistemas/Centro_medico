<?php
// script para crear una conexión con la BD

// Parametros requeridos para la conexión con la BD

// Parametros BD local - Constantes
define('USER', 'ramo_on360'); // Crea la constante USER con valor 'root'
define('PW', '12345');
define('HOST', 'localhost');
define('BD', 'centro_medico');

// Parametros BD remota (infinityfree)
/*define('USER', 'if0_41712650');
define('PW', 'PFf2HxX1ami0eM');
define('HOST', 'sql213.infinityfree.com');
define('BD', '');*/

// Conexión con la BD
$conexion = mysqli_connect(HOST, USER, PW, BD);

// Establecer conjunto de caracteres para el hosting
mysqli_set_charset($conexion, "utf8mb4") ;

// Verificar la conexion con la BD

if (!$conexion) {
    die("La conexion con la BD fallo: " . mysqli_error($conexion));
} else {
    // echo "Conexión exitosa a la base de datos.";
}
    die("Conexión a la BD exitosa.");
?>