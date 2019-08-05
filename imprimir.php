<?php include './includes/head.php' ?>

<div id="imprimir">
    <?php if(isset($_SESSION)):?>
        <p id="sNombre">
            <span>Nombre y apellido:</span> <br> <?php echo $_SESSION['nombre'].''.$_SESSION['apellido']?>
        </p>
        <p id="sNumeroDocumento">
            <span>Número de Documento:</span> <br> <?php echo $_SESSION['tipoDocumento'].' '.$_SESSION['numeroDocumento']?>
        </p>
        <p id="sNumeroSorteado">
            <span>Numero Sorteado:</span> <br> <strong><?php echo $_SESSION['numeroSorteado']?></strong>
        </p>
    <?php endif;?>
</div>

<script>
    window.print();
</script>

<?php include './includes/footer.php' ?>