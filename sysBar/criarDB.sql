/* criar o banco*/
CREATE DATABASE `db_sysBar` CHARACTER SET utf8 COLLATE utf8_general_ci;

/*criar a tabela comanda*/

CREATE TABLE `comandas`(
`id` INT(11) NOT NULL PRIMARY  KEY AUTO_INCREMENT,
`mesa_cliente`  VARCHAR(255),
`data` DATE,
`inicio` TIME,
`fim` TIME
    
);


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

