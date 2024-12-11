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

-- Mofication des champs --
ALTER TABLE clients ADD COLUMN nationaliter varchar (20);
ALTER TABLE clients ADD COLUMN sex varchar (20);
ALTER TABLE activites ADD COLUMN name varchar (100);


-- Insertion --
INSERT INTO clients (NOM, PRENOM, EMAIL, TELEPHONE, ADRESSE, DATE_NAISSANCE) VALUES ('Lambara','Houssam', 'lambarahoussam@gmail.com', '0608304949', '123 Rue Principale', '1998-06-13');
INSERT INTO activites (TITRE,DESTINATION,PRIX,DATE_DEBUT,DATE_FIN,PLACE_DISPONIBLE) VALUES ('trip','maroc', 2025 ,'2025-06-10', '2025-06-20',20);
INSERT INTO reservations (ID_CLIENT,ID_ACTIVITE,DATE_RESERVATION,STATUS) VALUES (3, 1, '2025-02-05' ,'Confirmée');

--Mise à jour--
UPDATE activites SET DESTINATION = 'France' WHERE ID_activite = 2;

--Suppression--
DELETE FROM reservations WHERE ID_reservation = 4;


-- Requete de jointure --
select  a.* from activites as a , reservations as r , clients as c
where  a.ID_activite = r.ID_ACTIVITE
AND r.ID_CLIENT	 = c.ID_client
and nom='ayoub'


--methode inner join --
-- select  a.*  ,  c.* from activites as a 
-- inner join reservations as r  on  a.ID_activite = r.ID_ACTIVITE
-- inner join clients as c on  r.ID_CLIENT	 = c.ID_client
-- where   nom='ayoub'