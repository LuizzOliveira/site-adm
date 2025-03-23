
INSERT INTO `produtos` (`nome`, `descricao`, `preco`, `estoque`) VALUES
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


INSERT INTO `clientes` (`nome`, `email`) VALUES
('João Silva', 'joao.silva@email.com'),
('Maria Oliveira', 'maria.oliveira@email.com'),
('Carlos Santos', 'carlos.santos@email.com'),
('Ana Souza', 'ana.souza@email.com'),
('Pedro Lima', 'pedro.lima@email.com'),
('Juliana Mendes', 'juliana.mendes@email.com'),
('Fernando Alves', 'fernando.alves@email.com'),
('Camila Rocha', 'camila.rocha@email.com'),
('Ricardo Nunes', 'ricardo.nunes@email.com'),
('Beatriz Gomes', 'beatriz.gomes@email.com');


INSERT INTO `pedidos` (`cliente_id`, `data_pedido`) VALUES
(1, '2024-03-01 10:15:00'),
(2, '2024-03-02 14:30:00'),
(3, '2024-03-03 16:45:00'),
(4, '2024-03-04 12:00:00'),
(5, '2024-03-05 18:20:00'),
(6, '2024-03-06 09:10:00'),
(7, '2024-03-07 21:30:00'),
(8, '2024-03-08 11:25:00'),
(9, '2024-03-09 13:40:00'),
(10, '2024-03-10 15:55:00');
