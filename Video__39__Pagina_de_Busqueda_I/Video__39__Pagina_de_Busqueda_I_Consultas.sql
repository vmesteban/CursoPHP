/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Portatil_Bot
 * Created: 23-dic-2016
 */


-- Busquedas seleccionadas mediante Expresiones Regulares
--> % Sustituye a una cadena de caracteres
SELECT * FROM PRODUCTOS WHERE `NOMBRE ARTÍCULO` LIKE '%CABALLERO'; 

-- Busquedas seleccionadas mediante Expresiones Regulares
--> _ 
Sustituye a un caracter : por si hay mala escritura o equivocacion al escribirlo
SELECT * FROM PRODUCTOS WHERE `NOMBRE ARTÍCULO` LIKE '_alón';

SELECT * FROM PRODUCTOS WHERE `NOMBRE ARTÍCULO` like 'ceni_ero';