
-- Criar Banco de Dados

CREATE DATABASE EcommerceDB;
GO

USE EcommerceDB
GO

-- Tabela de Produtos
CREATE TABLE Produtos (
	id INT IDENTITY(1,1) PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	descricao VARCHAR(255),
	preco DECIMAL(10,2) NOT NULL,
	imagem VARCHAR(255),
	estoque INT DEFAULT 0
);
GO

-- Inserindo produtos iniciais
INSERT INTO Produtos (nome, descricao, preco, imagem, estoque) VALUES
('Mouse Gamer RGB', 'Mouse com iluminação RGB e 6 botões programáveis', 89.90, 'img/mouse.jpg', 50),
('Teclado Mecânico', 'Teclado mecânico switch blue com LED', 249.90, 'img/teclado.jpg', 30),
('Headset Surround', 'Headset com som 7.1 surround', 199.99, 'img/headset.jpg', 45),
('Monitor 24" 144Hz', 'Monitor gamer 24 polegadas 144Hz', 999.90, 'img/monitor.jpg', 20);
GO

SELECT name FROM sys.sql_logins;

ALTER LOGIN ADMIN_TESTE WITH PASSWORD='@Senha123*';