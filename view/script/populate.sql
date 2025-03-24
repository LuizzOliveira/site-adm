-- Inserir dados na tabela produtos
INSERT INTO produtos (nome, descricao, preco, estoque) VALUES
('Smartphone X', 'Celular com 128GB de armazenamento e câmera de 64MP.', 2499.90, 15),
('Notebook Pro', 'Notebook com processador i7, 16GB RAM e SSD de 512GB.', 5899.99, 8),
('Fone de Ouvido Bluetooth', 'Fone sem fio com cancelamento de ruído.', 399.90, 25),
('Monitor 27"', 'Monitor Full HD de 27 polegadas com taxa de 144Hz.', 1299.90, 10),
('Teclado Mecânico', 'Teclado RGB com switches mecânicos azuis.', 349.90, 18),
('Mouse Gamer', 'Mouse ergonômico com sensor de 16.000 DPI.', 249.90, 22),
('Cadeira Gamer', 'Cadeira ergonômica com ajuste de altura e apoio para lombar.', 1099.90, 5),
('Smartwatch Fit', 'Relógio inteligente com monitoramento de saúde.', 699.90, 12),
('Impressora Multifuncional', 'Impressora a laser com scanner e Wi-Fi.', 1499.90, 7),
('HD Externo 2TB', 'Disco rígido externo USB 3.0 de 2TB.', 499.90, 20);

-- Inserir dados na tabela clientes
INSERT INTO clientes (nome, email, cpf) VALUES 
('Ana Lima', 'ana@email.com', '123.456.789-09'),
('Carlos Souza', 'carlos@email.com', '987.654.321-00'),
('Beatriz Rocha', 'beatriz@email.com', '111.222.333-44'),
('Fernando Cardoso', 'fernando@email.com', '555.666.777-88'),
('Juliana Mendes', 'juliana@email.com', '999.888.777-66'),
('Lucas Oliveira', 'lucas@email.com', '333.444.555-22'),
('Mariana Dias', 'mariana@email.com', '666.777.888-11'),
('Rafael Santos', 'rafael@email.com', '222.333.444-55'),
('Paulo Freitas', 'paulo@email.com', '444.555.666-33'),
('Camila Nunes', 'camila@email.com', '777.888.999-00');


-- Inserir dados na tabela pedidos
INSERT INTO pedidos (produto_id, cliente_id, data_pedido) VALUES
(1, 1, '2024-03-01 10:00:00'),
(2, 2, '2024-03-02 11:30:00'),
(3, 3, '2024-03-03 14:45:00'),
(4, 4, '2024-03-04 09:15:00'),
(5, 5, '2024-03-05 16:20:00'),
(6, 6, '2024-03-06 13:10:00'),
(7, 7, '2024-03-07 18:05:00'),
(8, 8, '2024-03-08 20:30:00'),
(9, 9, '2024-03-09 07:50:00'),
(10, 10, '2024-03-10 22:10:00');