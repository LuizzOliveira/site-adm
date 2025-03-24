-- Criar tabela de clientes
DROP DATABASE site_adm;

create database site_adm;

use site_adm;

CREATE TABLE `clientes` (
  `cliente_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `cpf` VARCHAR(14) NOT NULL UNIQUE,
  PRIMARY KEY (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Criar tabela de produtos
CREATE TABLE `produtos` (
  `produto_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `descricao` TEXT NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `estoque` INT(11) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`produto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Criar tabela de pedidos
CREATE TABLE `pedidos` (
  `pedido_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `produto_id` INT(11) UNSIGNED NOT NULL, 
  `cliente_id` INT(11) UNSIGNED NOT NULL,
  `data_pedido` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pedido_id`),
  CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`cliente_id`) 
    REFERENCES `clientes` (`cliente_id`) 
    ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`produto_id`) 
    REFERENCES `produtos` (`produto_id`) 
    ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
