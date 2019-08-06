<?php 
    if(isset($_SESSION)) {
        session_destroy();
        $_SESSION['sesion'] = 'cerrada';
    }
?>
<?php include './includes/connect.php'?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>San Cristobal - Expo Estrategas</title>

    <link rel="stylesheet" href="./assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/index.min.css">
    <link rel="stylesheet" href="./assets/css/print.min.css" media="print">
    <link rel="stylesheet" href="./assets/css/sorteo.min.css">

</head>
<body>