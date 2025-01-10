drop table if exists UTILISATEUR;

create table UTILISATEUR(
    id INTEGER PRIMARY KEY AUTOINCREMENT;
    nom VARCHAR(255) NOT NULL,
    score INTEGER
);


INSERT INTO UTILISATEUR (nom, score) VALUES ('Alice', 0);
INSERT INTO UTILISATEUR (nom, score) VALUES ('Bob', 0);
INSERT INTO UTILISATEUR (nom, score) VALUES ('Charlie', 0);
INSERT INTO UTILISATEUR (nom, score) VALUES ('David', 0);