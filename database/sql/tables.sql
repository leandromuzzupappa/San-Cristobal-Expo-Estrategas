CREATE TABLE usuarios (
    id INT(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    razonSocial VARCHAR(255) NOT NULL,
    tipoDocumento VARCHAR(255) NOT NULL,
    numeroDocumento INT(255) NOT NULL,
    correoElectronico VARCHAR(255) NOT NULL,
    numeroSorteado INT(255) NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_numeroSorteado UNIQUE (numeroSorteado)
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES (null, 'Noelia', 'Torres', 'Woooonkeh', 'DNI', '123456789', 'nt@woonky.com', '1234');
INSERT INTO usuarios VALUES (null, 'Luis', 'Bertola', 'Luigi', 'DNI', '2132444', 'lb@luigi.com', '3221');
INSERT INTO usuarios VALUES (null, 'Orion', 'Torres', 'Woonky ori', 'DNI', '31232141', 'ot@torres.com', '4573');