CREATE TABLE categorias
(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE produtos
(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(150) NOT NULL,
  preco DOUBLE(9,2) NOT NULL,
  quantidade INT NOT NULL,
  categoria_id INT NOT NULL,
  PRIMARY KEY(id)
);

ALTER TABLE produtos ADD CONSTRAINT fk_categorias FOREIGN KEY (categoria_id) REFERENCES categorias(id);
