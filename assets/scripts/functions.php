<?php 

function getRandomNumber() {
    $numero = rand(1111, 9999);
    return $numero;
}
function handleNumeroSorteado ($connect, $numeroSorteado) {
    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($connect, $sql);
    
    $numerosUsados = array();
    while ($row = mysqli_fetch_assoc($query) ) {
        $numerosUsados[] = intval($row['numeroSorteado']);
    }

    if ( in_array($numeroSorteado, $numerosUsados, true) ) {
        $numeroSorteado = getRandomNumber();
    } else {
        $numeroSorteado;
    }

    return $numeroSorteado;
}
