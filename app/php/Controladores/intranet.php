<?php

function saludo(){
    echo 'Hola';
}

function getBanner(){
    global $link;

    $sql = mysqli_query($link, 'SELECT id_banner, ruta FROM banner');

    $rutas = [];

    while($row = mysqli_fetch_assoc($sql)){
        $rutas[] = $row;
    }

    /*return json_encode($rutas);*/
    echo respuesta($rutas);
}

function getSistema(){
    global $link;

    $sql = mysqli_query($link, 'SELECT * FROM sistema');

    $sistemas = [];

    while($row = mysqli_fetch_assoc($sql)){
        $sistemas[] = $row;
    }

    echo respuesta($sistemas);
}

function postDocumento(){
    global $link;

    $cuerpo = getCuerpo();
    $id = $cuerpo['id'];

    $stmt = mysqli_prepare($link, 'SELECT * FROM documento WHERE id_categoria = ?');
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $resultados = mysqli_stmt_get_result($stmt);
    $documentos = [];

    while($row = mysqli_fetch_assoc($resultados)){
        $documentos[] = $row;
    }

    mysqli_stmt_close($stmt);
    echo respuesta($documentos);
}