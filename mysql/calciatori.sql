CREATE DATABASE calcio;
use calcio;


CREATE TABLE  squadra
(
    nome_squadra VARCHAR (20),
    id_squadra INT AUTO_INCREMENT PRIMARY KEY
);

CREATE table calciatori
(
    cognome  VARCHAR (20)  NOT NULL,
    ruolo INT NOT NULL,
    stipendio INT NOT NULL,
    nascita DATE NOT NULL,
    id_calciatore INT AUTO_INCREMENT PRIMARY KEY,
    capitano_squadra INT ,
    id_squadra INT ,
    FOREIGN KEY (id_squadra)REFERENCES squadra(id_squadra)
    
);


CREATE TABLE  valutazioni 
(
    voto INT not null,
    data_partita DATE NOT NULL,
    id_voto INT AUTO_INCREMENT PRIMARY KEY,
    id_calciatore INT ,
    FOREIGN KEY (id_calciatore)REFERENCES calciatori(id_calciatore)
);

-- modificare  nelle tabelle  calciatori il campo ruolo così che sia di tipo string
alter table calciatori
change ruolo ruolo varchar (20);

--  inserire  un'istanza nella tabella calciatori la pk è obbligatoria e va messo null
INSERT INTO calciatori(id_calciatore, cognome, ruolo, stipendio, nascita, capitano_squadra, id_squadra) 
VALUES (NULL,'Rossi', 'attaccante', 1000, '2005-05-19', 5,NULL);

-- modificare nella tabella il cognome rossi con tutte le istanze
UPDATE  calciatori SET cognome='bianchi' where cognome='rossi';

-- cancellare nella tabella sqadre  l'istanza con nome squadra = a verdi
DELETE from squadra where nome_squadra = 'Verdi';

-- Inserire 5 istanze nella tabella calciatori
INSERT INTO calciatori(id_calciatore, cognome, ruolo, stipendio, nascita, capitano_squadra, id_squadra) 
VALUES (NULL,'Rossi', 'attaccante', 10000, '2005-05-19', 5,NULL);

INSERT INTO calciatori(id_calciatore, cognome, ruolo, stipendio, nascita, capitano_squadra, id_squadra) 
VALUES (NULL,'verdi', 'attaccante', 3000, '2005-05-19', 5,NULL);

INSERT INTO calciatori(id_calciatore, cognome, ruolo, stipendio, nascita, capitano_squadra, id_squadra) 
VALUES (NULL,'gialli', 'attaccante', 299, '2005-05-19', 5,NULL);

INSERT INTO calciatori(id_calciatore, cognome, ruolo, stipendio, nascita, capitano_squadra, id_squadra) 
VALUES (NULL,'neri', 'attaccante', 2345534, '2005-05-19', 5,NULL);

-- produrre un elenco con i cognomi  di tutti i calciatori  aventi stipendio  maggiore di 1000 ordinato sul cognome
select cognome 
from calciatori 
where stipendio>1000;
order by cognome;






