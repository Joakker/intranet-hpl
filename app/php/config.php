<?php
//Em este archivo configuraremos los parametros para conectarse a la base de datos.

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'gestion_tic');
// define('DB_PASSWORD', 'Gestion.2020');
// define('DB_NAME', 'gestion_tic');

define('DB_SERVER', 'mariadb');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'intranet');

// intenta conectarse a la base de datos.
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// checkea si fallo la conexion
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

function validarToken($tokenInput)
{
    if (!empty($tokenInput)) {
        if (isset($_SESSION['token'])) {
            if (hash_equals($_SESSION['token'], $tokenInput)) {
                return true;
            } else {
                echo "Token no coincide";

                return false;
            }
        }
    } else {
        echo "No se a creado el token";

        return false;
    }
}