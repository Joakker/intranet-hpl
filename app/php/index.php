<?php
/*
=====================================================================================================================================
Funciones principales (OBLIGATORIO)
=====================================================================================================================================
*/

// Se crea una variable para almacenar las apis
$rutas = [];

// Función con el objetivo de permitir metodos GET
function get($path, $callback){
    /*
        global $rutas : Acceder a la variable $rutas que se encuentra fuera de la función
        $rutas['GET'][$path] = $callback; : Guardamos el array bajo el metodo GET
        $callback : La función que se ejecutara cuando alguien visite esa ruta
    */

    global $rutas;
    $rutas['GET'][$path] = $callback;
}

// Función con el objetivo de permitir metodos POST
function post($path, $callback){
    /*
        global $rutas : Acceder a la variable $rutas que se encuentra fuera de la función
        $rutas['GET'][$path] = $callback; : Guardamos el array bajo el metodo POST
        $callback : La función que se ejecutara cuando alguien visite esa ruta
    */

    global $rutas;
    $rutas['POST'][$path] = $callback;
}

// Función para ejecutar el analisis de URL para activar APIs
function run(){
    /*
        global $rutas : Acceder a la variable $rutas que se encuentra fuera de la función
        $metodo : Se obtiene el metodo enviado desde el frontend
        $uri : Se obtiene la URL recibida
    */

    global $rutas;
    $metodo = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    

    // Busca la coincidencia exacta primero
    if(isset($rutas[$metodo][$uri])){
        call_user_func($rutas[$metodo][$uri]);
        return;
    }

    // En el caso de que no encuentre coincidencia exacta, busca rutas con los parametros dinamicos
    if(isset($rutas[$metodo])){
        foreach($rutas[$metodo] as $ruta => $callback){
            $esquema = str_replace('/', '\/', $ruta);
            $esquema = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_-]+)', $esquema);
            $esquema = '/^' . $esquema . '$/';

            if(preg_match($esquema, $uri, $matches)){
                array_shift($matches);
                call_user_func_array($callback, $matches);
                return;
            }
        }
    }

    // En el caso de no cumplir se envia un mensaje indicando que no se encontro la ruta
    http_response_code(404);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Ruta no encontrada']);
}

// Función para enviar respuestas en cada API
function respuesta($data, $status = 200){
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
}

// Función para obtener el cuerpo de la solicitud
function getCuerpo(){
    return json_decode(file_get_contents('php://input'), true);
}

/*
=====================================================================================================================================
Importación de controladores (OBLIGATORIO)
=====================================================================================================================================
*/

require_once 'config.php';
require_once './Controladores/intranet.php';

/*
=====================================================================================================================================
Definición de APIs (OBLIGATORIO)
=====================================================================================================================================
*/
get('/api', function(){
    return respuesta(['Mensaje' => 'API funcionado']);
});
get('/api/banner', 'getBanner');
get('/api/sistema', 'getSistema');
post('/api/docs', 'postDocumento');

get('/api/saludo', 'saludo');


// Ejecución
run();