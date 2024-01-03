/* criar o banco*/
CREATE DATABASE `db_sysbar` CHARACTER SET utf8 COLLATE utf8_general_ci;

/*criar a tabela comanda*/

CREATE TABLE `comandas`(
`id` INT(11) NOT NULL PRIMARY  KEY AUTO_INCREMENT,
`mesa_cliente`  VARCHAR(255),
`data_inicio` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`data_fim` DATE,
`status` VARCHAR(255),
`total` DECIMAL(10, 2)
    
);
CREATE TABLE `despesas`(
`id` INT(11) NOT NULL PRIMARY  KEY AUTO_INCREMENT,
`descricao`  VARCHAR(255),
`data` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`valor` DECIMAL(10, 2)
    
);

CREATE TABLE `consumos`(
`id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
`id_comanda` INT,
`produto` VARCHAR(255),
`valor_unitario` DECIMAL(10, 2),
`qtd` INT,
`total` DECIMAL(10,2)
)

CREATE TABLE `produtos`(
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `descricao` VARCHAR(255),
    `preco_venda` DECIMAL(10,2)
);


/*
CREATE TABLE `consumos`(
`id` INT(11) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
`id_comanda` INT(11) NOT NULL,
`produto` VARCHAR(255) NOT NULL,
`qtd` INT(11) NOT NULL,
`valor` DECIMAL
    
);

*/

