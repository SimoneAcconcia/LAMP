CREATE DATABASE lavoro;
use lavoro;
CREATE TABLE impiegati
(
    cognome varchar(20),
    id_dipartimento int  PRIMARY KEY

);
    
CREATE TABLE dipartimenti
(
    nome_dipartimento varchar(20),
    id_dipartimento int  PRIMARY KEY

);


INSERT INTO impiegati (cognome,id_dipartimento)
VALUES('rossi','31');

INSERT INTO impiegati (cognome,id_dipartimento)
VALUES('bianchi','33');

INSERT INTO impiegati (cognome,id_dipartimento)
VALUES('mancini','34');


INSERT INTO impiegati (cognome,id_dipartimento)
VALUES('santoro','35');

INSERT INTO impiegati (cognome,id_dipartimento)
VALUES('monti','36');


INSERT INTO impiegati (cognome,id_dipartimento)
VALUES('grassi','37');

INSERT INTO dipartimenti (nome_dipartimento,id_dipartimento)
VALUES('vendite','31');

INSERT INTO dipartimenti (nome_dipartimento,id_dipartimento)
VALUES('tecnico','33');

INSERT INTO dipartimenti (nome_dipartimento,id_dipartimento)
VALUES('risorse umane ','34');

INSERT INTO dipartimenti (nome_dipartimento,id_dipartimento)
VALUES('promozione','35');


SELECT *
FROM   impiegati 
INNER JOIN dipartimenti 
ON impiegati.id_dipartimento = dipartimenti.id_dipartimento

SELECT *  
FROM   impiegati, dipartimenti 
WHERE  impiegati.id_dipartimento = dipartimenti.id_dipartimento;


SELECT *
FROM   impiegati NATURAL JOIN dipartimenti;


SELECT *
FROM   impiegati 
INNER JOIN dipartimenti 
ON impiegati.id_dipartimento = dipartimenti.id_dipartimento;

SELECT *
FROM   impiegati CROSS JOIN dipartimenti;


SELECT *  
FROM  impiegati  LEFT OUTER JOIN dipartimenti  
ON impiegati.id_dipartimento = dipartimenti.id_dipartimento;


SELECT * 
FROM   impiegati RIGHT OUTER JOIN dipartimenti 
ON impiegati.id_dipartimento = dipartimenti.id_dipartimento;


SELECT * 
FROM  impiegati RIGHT OUTER JOIN dipartimenti 
ON impiegati.id_dipartimento = dipartimenti.id_dipartimento;



SELECT *
FROM   impiegati 
LEFT JOIN dipartimenti 
ON impiegati.id_dipartimento = dipartimenti.id_dipartimento
UNION
SELECT *
FROM   impiegati
RIGHT JOIN dipartimenti
ON impiegati.id_dipartimento = dipartimenti.id_dipartimento
WHERE  impiegati.id_dipartimento IS NULL;

SELECT *  
FROM   impiegati 
FULL OUTER JOIN dipartimenti 
ON impiegati.id_dipartimento = dipartimenti.id_dipartimento;
