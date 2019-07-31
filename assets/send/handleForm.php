<?php
include_once '../../includes/connect.php';
include_once '../scripts/functions.php';

define('br', '<br>');
define('hr', '<hr>');


$data = $_POST;

if ( !empty($data['nombre']) && !empty($data['apellido']) && !empty($data['razonSocial']) && !empty($data['tipoDocumento_']) && !empty($data['numeroDocumento']) && !empty($data['correo']) ) {
    echo 'entro';

    if ( $data['nombre'] != '' ) {
        $nombre = $data['nombre'];
    }
    if ( $data['apellido'] != '' ) {
        $apellido = $data['apellido'];
    }
    if ( $data['razonSocial'] != '' ) {
        $razonSocial = $data['razonSocial'];
    }
    if ( $data['tipoDocumento_'] != '' ) {
        $tipoDocumento = $data['tipoDocumento_'];
    }
    if ( $data['numeroDocumento'] != '' ) {
        $numeroDocumento = $data['numeroDocumento'];
    }
    if ( $data['correo'] != '' ) {
        $correo = $data['correo'];
    }

    $numeroSorteado = getRandomNumber();

    

} else {
    echo 'no entro';
    //header('Location: ../../gracias.php?error');
}