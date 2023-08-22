-- NOT NULL é uma constraint

CREATE TABLE notnull(
    nome VARCHAR(255) NOT NULL;
    idade INTEGER;
)
-- SET @@GLOBAL.SQL_MODE = 'STRICT_ALL_TABLES'; "MODO RÍGIDO"
-- no modo de RIGIDO, enquanto haver o not null, ele deve receber um valor toda vez em que inserir.

INSERT INTO notnull(idade) VALUES (22);

-- O comando acima irá me retornar um erro, acusando que o "nome" é obrigatório a receber um valor.



CREATE TABLE IF NOT EXISTS teste(
    nome VARCHAR(255) UNIQUE NOT NULL, -- UNIQUE torna o valor unico dentro do banco, logo, não pode ser repetido.
    email VARCHAR(90) NOT NULL,
    senha VARCHAR(8) NOT NULL,
);

