<?php

$connect = mysqli_connect('localhost', 'administrador', 'administrador', 'sanCristobalExpoEstrategas');

if ( $connect ) {
    echo 'Estas conectado';
}else {
    echo 'No te pudiste conectar a la base de datos'.mysqli_connect_error();
}

if(!isset($_SESSION)) {
    session_start();
}
