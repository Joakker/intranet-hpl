<?php

include_once '../config.php';

$res = mysqli_query($link, "SELECT * FROM sistema");

if (!$res) {
    echo json_encode(["status" => "error", "data" => mysqli_error($link)]);
    die();
}


echo json_encode([[
    "id_sistema" => "3",
    "nombre" => "Lab. HPL Antiguo",
    "descripcion" => "Resultados de Laboratorio HPL hasta el 25/09/2023",
    "icono" => "/iconos/3.png",
    "etiquetas" => "resultados, laboratorio, 25/09/2023",
    "indexacion" => "30",
    "id_tipo" => "2",
    "url" => "http://10.4.49.114/csp/acb/LISPages/LISPages.Main.LoginAux.cls?LABLINK=1'"
],
[
    "id_sistema" => "13",
    "nombre" => "Rayos - MEDICAP",
    "descripcion" => "Medicap de contingencia solo para dia 27/07/2024",
    "icono" => "/iconos/11.png",
    "etiquetas" => "rayos, medicap, 27/07/2024",
    "indexacion" => "130",
    "id_tipo" => "2",
    "url" => "http://sst.medicap.cl/"
],
[
    "id_sistema" => "18",
    "nombre" => "Teleprocesos",
    "descripcion" => "Plataforma que da soporte a las atenciones de teleprocesos en la Red.",
    "icono" => "/iconos/16.png",
    "etiquetas" => "teleprocesos, red",
    "indexacion" => "180",
    "id_tipo" => "2",
    "url" => "https://www.teleprocesos.cl/icremota-ui/"
],
[
    "id_sistema" => "21",
    "nombre" => "RPEC",
    "descripcion" => "Sistema de Registro Nacional de Inmunizaciones.",
    "icono" => "/iconos/19.png",
    "etiquetas" => "inmunizacion, registro",
    "indexacion" => "210",
    "id_tipo" => "2",
    "url" => "http://webservices.saludteprotege.cl/minsal.rpec/"
],
[
    "id_sistema" => "35",
    "nombre" => "Plataforma Eventos Adversos",
    "descripcion" => "Sistema para el registro de eventos adversos.",
    "icono" => "/iconos/33.png",
    "etiquetas" => "efectos, adversos, sistema",
    "indexacion" => "350",
    "id_tipo" => "2",
    "url" => "http://10.4.49.60:8080/Eventos%20Adversos/login.php"
],
[
    "id_sistema" => "37",
    "nombre" => "Trazabilidad de Biopsias",
    "descripcion" => "Sistema para el registro y trazabilidad de biopsias.",
    "icono" => "/iconos/35.png",
    "etiquetas" => "biopsias, seguimiento, trazabilidad",
    "indexacion" => "370",
    "id_tipo" => "2",
    "url" => "http://10.4.49.60:8080/biopsia/login.php"
],
[
    "id_sistema" => "41",
    "nombre" => "IPLUS",
    "descripcion" => "Sistema Iplus.",
    "icono" => "/iconos/49.png",
    "etiquetas" => "iplus",
    "indexacion" => "410",
    "id_tipo" => "2",
    "url" => "http://10.4.49.110:81/"
],
[
    "id_sistema" => "45",
    "nombre" => "Hemocomponentes",
    "descripcion" => "Gestion y control interno de Hemocomponentes HPL.",
    "icono" => "/iconos/43.png",
    "etiquetas" => "hemocomponentes, hpl, sangre, hospital",
    "indexacion" => "450",
    "id_tipo" => "2",
    "url" => "http://10.4.49.60:8080/gestionHemocomponentes/login.php"
],
[
    "id_sistema" => "47",
    "nombre" => "e-Delphyn",
    "descripcion" => "Banco de sangre.",
    "icono" => "/iconos/45.png",
    "etiquetas" => "sangre, banco",
    "indexacion" => "470",
    "id_tipo" => "2",
    "url" => "http://10.3.112.109:8080/edelphynbb/login.jsp"
],
[
    "id_sistema" => "48",
    "nombre" => "COVID-19",
    "descripcion" => "Sistema para el registro de casos en la comuna.",
    "icono" => "/iconos/37.png",
    "etiquetas" => "registros, covid, comuna",
    "indexacion" => "480",
    "id_tipo" => "2",
    "url" => "http://10.4.49.60:8080/plataformacovid19/login.php"
],
[
    "id_sistema" => "49",
    "nombre" => "Sistema Reloj Control",
    "descripcion" => "Sistema de marcaje funcionarios.",
    "icono" => "/iconos/38.png",
    "etiquetas" => "funcionarios, marcaje, reloj",
    "indexacion" => "490",
    "id_tipo" => "3",
    "url" => "http://10.4.49.62:8080/"
]]);

?>
