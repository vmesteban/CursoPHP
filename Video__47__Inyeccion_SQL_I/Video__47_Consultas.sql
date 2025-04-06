/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Portatil_Bot
 * Created: 24-dic-2016
 */



USE x_pruebas;

CREATE TABLE usuarios (
    usuario VARCHAR(20) NOT NULL,
    contra VARCHAR(20) NOT NULL,
    tlno VARCHAR(20) NOT NULL,
    direccion VARCHAR(50) NOT NULL
);

INSERT INTO usuarios (usuario,contra,tlno,direccion) VALUES ("Paco","1234","9152485678","P Vergana");

INSERT INTO usuarios (usuario,contra,tlno,direccion) VALUES ("Maria","5432","915236589","Gran Via");

INSERT INTO usuarios (usuario,contra,tlno,direccion) VALUES ("Ana","5555","915243667","Serrano");

select * from usuarios;