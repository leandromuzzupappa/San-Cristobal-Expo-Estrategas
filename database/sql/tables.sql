CREATE TABLE usuarios (
    id INT(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    razonSocial VARCHAR(255) NOT NULL,
    tipoDocumento VARCHAR(255) NOT NULL,
    numeroDocumento INT(255) NOT NULL,
    correoElectronico VARCHAR(255) NOT NULL,
    numeroSorteado INT(255) NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDb;

