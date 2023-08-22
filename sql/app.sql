CREATE DATABASE IF NOT EXIST `NOME_DB`;

USE DATABASE IF EXISTS `NOME_DB`;

CREATE TABLE IF NOT EXISTS `nome_tabela`(
    uid INTEGER AUTOINCREMENT,
    username VARCHAR(45) NOT NULL,
    password VARCHAR(8) NOT NULL,
    email VARCHAR(90) UNIQUE NOT NULL,
    PRIMARY KEY(uid),
);

CREATE TABLE IF NOT EXISTS `nome_tabela2`(
    postid INTEGER AUTOINCREMENT,
    uid INTEGER NOT NULL,
    title VARCHAR(30) UNIQUE NOT NULL,
    text TEXT NOT NULL,
    PRIMARY KEY (postid),
    FOREIGN KEY (uid) REFERENCES users(uid),
)


INSERT INTO `nome_tabela` (`username`,`password`, `email`) VALUES (`admin`, `admin`, `admin@example.com`);

SELECT * FROM `nome_tabela`;

SELECT * FROM `nome_tabela` WHERE uid = 1;

SELECT text FROM `nome_tabela2` WHERE uid = 1050;
