CREATE database gestion_des_reservation1;

USE gestion_des_reservation1;
CREATE TABLE clients(
    ID_client INT(11)PRIMARY KEY NOT NULL AUTO_INCREMENT,
    NOM varchar(100),
    PRENOM varchar(100),
    EMAIL varchar(150),
    TELEPHONE varchar(15),
    ADRESSE text,
    DATE_NAISSANCE date
    );

CREATE TABLE activites(
    ID_activite INT(11)PRIMARY KEY NOT NULL AUTO_INCREMENT,
    TITRE varchar(150),
    DESTINATION varchar(100),
    PRIX decimal(10.2)NOT NULL,
    DATE_DEBUT date,
    DATE_FIN date,
    PLACE_DISPONIBLE INT(11)NOT NULL
    );
    
CREATE TABLE reservations(
	ID_reservation INT(11)PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ID_CLIENT INT(11),
    ID_ACTIVITE INT(11),
    DATE_RESERVATION timestamp,
    STATUS ENUM('En_attente','Confirmée','Annulée'),
    FOREIGN KEY (ID_CLIENT)REFERENCES clients(ID_client)ON DELETE CASCADE,
    FOREIGN KEY (ID_ACTIVITE) REFERENCES activites (ID_activite) ON DELETE CASCADE
    );

