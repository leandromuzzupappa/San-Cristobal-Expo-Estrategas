<?php
include_once '../../includes/connect.php';
include_once '../scripts/functions.php';

define('br', '<br>');
define('hr', '<hr>');


$data = $_POST;

if ( !empty($data['nombre']) && !empty($data['apellido']) && !empty($data['razonSocial']) && !empty($data['tipoDocumento_']) && !empty($data['numeroDocumento']) && !empty($data['correo']) ) {

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
    // Check if the number has already taken
    $numeroSorteado = handleNumeroSorteado ($connect, $numeroSorteado);

    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['razonSocial'] = $razonSocial;
    $_SESSION['tipoDocumento'] = $tipoDocumento;
    $_SESSION['numeroDocumento'] = $numeroDocumento;
    $_SESSION['correo'] = $correo;
    $_SESSION['numeroSorteado'] = $numeroSorteado;

    if ( !empty($_SESSION['nombre']) && !empty($_SESSION['apellido']) && !empty($_SESSION['razonSocial']) && !empty($_SESSION['tipoDocumento']) && !empty($_SESSION['numeroDocumento']) && !empty($_SESSION['correo']) && !empty($_SESSION['numeroSorteado']) ) {
        $sendUser = "INSERT INTO usuarios VALUES (null, '$nombre', '$apellido', '$razonSocial', '$tipoDocumento', '$numeroDocumento', '$correo', '$numeroSorteado')";
        $sendQuery = mysqli_query($connect, $sendUser);

        //session_destroy();
        header("Location: ../../gracias.php?enviado");
    } else {
        header("Location: ../../gracias.php?error%20en%20la%20consulta");
        session_destroy();
    }

} else {
    session_destroy();
    header('Location: ../../gracias.php?error');
}