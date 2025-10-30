<?php
define('DB_SERVER', 'mariadb');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'rootpass');
define('DB_NAME', 'intranet');


// intenta conectarse a la base de datos.
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die('ERROR: could not connect ' . mysqli_connect_error());
}

?>
