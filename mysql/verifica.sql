CREATE database verifica;
use  verifica;
create table Dipendenti 
(
    ID int AUTO_INCREMENT  PRIMARY KEY,
    cognome varchar  (20),
    ruolo varchar (20),
    stipendio int ,
    dataNascita date,
    codResponsabile int 
);

create table progetti
(
    codiceR int PRIMARY KEY,
    nomeprogetto varchar  (20)
);

create table contratto
(
    contratto int AUTO_INCREMENT PRIMARY KEY,
    codiceR int,
    ID int,
    FOREIGN KEY(ID) references Dipendenti(ID),
    FOREIGN KEY(codiceR)references progetti(codiceR)

);

-- Popoliamo la tabella Dipendenti
INSERT INTO Dipendenti (cognome, ruolo, stipendio, dataNascita, codResponsabile)
VALUES
    ('Rossi', 'Sviluppatore', 50000, '1990-05-15', NULL), -- Nessun responsabile
    ('Verdi', 'Manager', 75000, '1985-03-20', NULL), -- Nessun responsabile
    ('Bianchi', 'Sviluppatore', 45000, '1995-10-10', 2), -- Responsabile con ID 2
    ('Gialli', 'Sviluppatore', 47000, '1992-08-25', 2); -- Responsabile con ID 2

-- Popoliamo la tabella Progetti
INSERT INTO progetti (codiceR, nomeprogetto)
VALUES
    (1, 'Progetto A'),
    (2, 'Progetto B'),
    (3, 'Progetto C');

-- Popoliamo la tabella Contratto
INSERT INTO contratto (Progetti, codiceR, ID)
VALUES
    (1, 1, 1), -- Dipendente 1 lavora su Progetto A
    (2, 2, 3), -- Dipendente 3 lavora su Progetto B
    (3, 3, 4); -- Dipendente 4 lavora su Progetto C


-- produrre un elenco dei cognomi di tutti i dipendenti aventi stipendio compresi tra 10.000 e 20.000
select cognome
from Dipendenti
where stipendio >='10.000' OR stipendio <='20.000';

-- produrre l'elenco nomeprogetto - cognome  dipendente ordinato su nomeprogetto
SELECT nomeprogetto,cognome
from Dipendenti D,contratto C,progetti P
where D.ID=C.ID AND P.codiceR= C.codiceR
order by nomeprogetto;

-- visualizzare i nomi dei diversi ruoli senza ripetizione dei dipendenti
select count(distinct ruolo)
from Dipendenti;

-- visualizzare cognome seguito dall'età attuale di ogni dipendente
select cognome, year(curdate())-year(dataNascita) AS età
from Dipendenti;

-- visualizzare il cognome di tutti i dipendenti la cui 2 lettera del cognome è la E e l'ultima lettera è la A
select  cognome 
from Dipendenti 
where cognome LIKE '_E%a';

-- visualizza il cognome di ogni dipendente seguito dal cognome del suo diretto superiore
SELECT D1.cognome AS Dipendente, D2.cognome AS DirettoSuperiore
FROM Dipendenti AS D1
JOIN Dipendenti AS D2 ON D1.codResponsabile = D2.ID;

-- visualizzare il cognome dei dipendenti che non sono mai stati assegnati a nessun progetto (il cui id non compare nella tabella contratto)
SELECT cognome 
from Dipendenti D
LEFT JOIN contratto C
ON D.ID=C.ID;
where C.ID IS NULL;

-- per ogni ruolo tabella dipendenti si visualizzino quanti dipendenti hanno quel ruolo, la media degli stipendi , lo stipendio max e quello min.
select count(ruolo),AVG (stipendio), MAX(stipendio),MIN(stipendio)
from Dipendenti;

-- per ogni progetto visualizzare il nome progetto e quanti dipendenti sono associati al progetto ma solo per i progetti che hanno più di 5 dipendenti associati
SELECT P.nomeprogetto,count(C.codiceR)
FROM progetto P , contratto C
group by (C.contratto) having num

