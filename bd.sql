CREATE DATABASE quiz2;

USE quiz2;

CREATE TABLE temas (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE preguntas (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_tema INT NOT NULL,
  pregunta TEXT NOT NULL,
  opcion_a TEXT NOT NULL,
  opcion_b TEXT NOT NULL,
  opcion_c TEXT NOT NULL,
  correcta VARCHAR(1) NOT NULL,
  FOREIGN KEY (id_tema) REFERENCES temas (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO temas (nombre) VALUES
('Programación'),
('Historia'),
('Ciencias');


INSERT INTO preguntas (id_tema, pregunta, opcion_a, opcion_b, opcion_c, correcta) VALUES
(1, '¿Qué es un bucle en programación?', 'Una estructura de control de flujo', 'Una condición lógica', 'Un bloque de código que se repite varias veces', 'c'),
(1, '¿Cuál es el lenguaje de programación más utilizado en el desarrollo web?', 'Java', 'Python', 'JavaScript', 'c'),
(1, '¿Qué significa HTML?', 'Hyper Text Markup Language', 'High Technology Markup Language', 'Hyperlink and Text Markup Language', 'a'),
(1, '¿Qué es CSS?', 'Un lenguaje de programación', 'Un protocolo de comunicación', 'Un lenguaje de hojas de estilo', 'c'),
(1, '¿Qué es un IDE?', 'Un entorno de desarrollo integrado', 'Un formato de archivo', 'Un protocolo de red', 'a'),

(2, '¿Quién fue el primer presidente de Estados Unidos?', 'George Washington', 'Abraham Lincoln', 'Thomas Jefferson', 'a'),
(2, '¿En qué año comenzó la Primera Guerra Mundial?', '1914', '1918', '1939', 'a'),
(2, '¿Cuál es la capital de Francia?', 'Londres', 'París', 'Madrid', 'b'),
(2, '¿En qué año se descubrió América?', '1492', '1776', '1812', 'a'),
(2, '¿Cuál es la montaña más alta del mundo?', 'Monte Everest', 'Monte Kilimanjaro', 'Monte Fuji', 'a'),

(3, '¿Cuál es el elemento más abundante en la Tierra?', 'Hierro', 'Oxígeno', 'Carbono', 'b'),
(3, '¿Quién descubrió la teoría de la relatividad?', 'Isaac Newton', 'Albert Einstein', 'Galileo Galilei', 'b'),
(3, '¿Cuál es el planeta más grande del sistema solar?', 'Júpiter', 'Saturno', 'Neptuno', 'a'),
(3, '¿Qué es la fotosíntesis?', 'Un proceso de respiración celular', 'Un proceso de alimentación de plantas', 'Un proceso de conversión de luz en energía', 'c'),
(3, '¿Cuál es la unidad básica de la materia?', 'Átomo', 'Molécula', 'Célula', 'a');
