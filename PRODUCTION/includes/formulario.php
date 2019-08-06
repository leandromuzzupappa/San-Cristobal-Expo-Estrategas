<form action="./assets/send/handleForm.php" method="POST" id="getUserData" autocomplete="off">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nombre">Nombre *</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required="required">
        </div>

        <div class="form-group col-md-6">
            <label for="apellido">Apellido *</label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required="required">
        </div>
    </div>

    <div class="form-group">
        <label for="razonSocial">Empresa / Razón Social *</label>
        <input type="razonSocial" class="form-control" name="razonSocial" id="razonSocial" placeholder="Empresa / Razón Social" required="required">
    </div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="tipoDocumento">Tipo de documento *</label>
            <select id="tipoDocumento" class="form-control" name="tipoDocumento " required="required">
                <option selected disabed>Elegir...</option>
                <option>DNI</option>
                <option>Pasaporte</option>
            </select>
        </div>
        <div class="form-group col-md-10">
            <label for="numeroDocumento">Número de documento *</label>
            <input type="text" class="form-control" name="numeroDocumento" id="numeroDocumento" required="required">
        </div>
        
    </div>

    <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input type="email" class="form-control" name="correo" id="correo" placeholder="nombre@email.com" style="text-transform: lowercase;" required="required">
    </div>

    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="tyc" name="tyc" required="required">
            <label class="form-check-label" for="tyc">
                Acepto los términos y condiciones.
            </label>
        </div>
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary" id="sendUserData">Enviar</button>
    </div>
</form>