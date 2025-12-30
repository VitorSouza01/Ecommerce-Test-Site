
-- Criar tabela de usuarios (SQL Server)

USE EcommerceDB;

CREATE TABLE usuarios (
	id INT IDENTITY PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	senha VARCHAR(255) NOT NULL,
	tipo VARCHAR(20) DEFAULT 'admin'
);

-- Inserindo usuario

INSERT INTO usuarios (nome, email, senha)
VALUES (
	'Administrador',
	'admin@admin.com',
	'Senha@2025'
);

USE EcommerceDB;
SELECT * FROM usuarios;
