-- Inserir clientes
INSERT INTO clientes (nome, email, cpf) VALUES
('João Silva', 'joao.silva@email.com', '111.222.333-44'),
('Maria Oliveira', 'maria.oliveira@email.com', '222.333.444-55'),
('Carlos Souza', 'carlos.souza@email.com', '333.444.555-66'),
('Ana Santos', 'ana.santos@email.com', '444.555.666-77'),
('Pedro Lima', 'pedro.lima@email.com', '555.666.777-88'),
('Juliana Costa', 'juliana.costa@email.com', '666.777.888-99'),
('Fernanda Alves', 'fernanda.alves@email.com', '777.888.999-00'),
('Ricardo Mendes', 'ricardo.mendes@email.com', '888.999.000-11'),
('Camila Rocha', 'camila.rocha@email.com', '999.000.111-22'),
('Gabriel Martins', 'gabriel.martins@email.com', '000.111.222-33');

-- Inserir produtos
INSERT INTO produtos (nome, descricao, preco, estoque) VALUES
('Smartphone X', 'Celular com 128GB de armazenamento e câmera de 64MP.', 2499.90, 15),
('Notebook Pro', 'Notebook com processador i7, 16GB RAM e SSD de 512GB.', 5899.99, 8),
('Fone de Ouvido Bluetooth', 'Fone sem fio com cancelamento de ruído.', 399.90, 25),
('Monitor 27"', 'Monitor Full HD de 27 polegadas com taxa de 144Hz.', 1299.90, 10),
('Teclado Mecânico', 'Teclado RGB com switches mecânicos azuis.', 349.90, 18),
('Mouse Gamer', 'Mouse ergonômico com sensor de 16000 DPI.', 249.90, 22),
('Cadeira Gamer', 'Cadeira ergonômica com ajuste de altura e apoio para lombar.', 1099.90, 5),
('Smartwatch Fit', 'Relógio inteligente com monitoramento de saúde.', 699.90, 12),
('Impressora Multifuncional', 'Impressora a laser com scanner e Wi-Fi.', 1499.90, 7),
('HD Externo 2TB', 'Disco rígido externo USB 3.0 de 2TB.', 499.90, 20);

-- Inserir pedidos (associando clientes e produtos aleatoriamente)
INSERT INTO pedidos (produto_id, cliente_id) VALUES
(1, 2), (3, 5), (2, 1), (4, 3), (5, 4),
(6, 6), (7, 8), (8, 9), (9, 10), (10, 7);
