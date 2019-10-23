CREATE TABLE clientes (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NULL,
  cpf VARCHAR(14) NULL,
  email VARCHAR(255) NULL,
  celular VARCHAR(20) NULL,
  data_nascimento DATE NULL,
  sexo CHAR(1) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE funcionarios (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NULL,
  cpf VARCHAR(14) NULL,
  rg VARCHAR(30) NULL,
  email VARCHAR(255) NULL,
  celular VARCHAR(20) NULL,
  data_nascimento DATE NULL,
  sexo CHAR(1) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE quartos (
  id INTEGER NOT NULL AUTO_INCREMENT,
  identificacao VARCHAR(10) NULL,
  lotacao VARCHAR(2) NULL,
  descricao TEXT NULL,
  valor_unico FLOAT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE contratos_reservas (
  id INTEGER NOT NULL AUTO_INCREMENT,
  clientes_id INTEGER NOT NULL,
  quartos_id INTEGER NOT NULL,
  data_reserva DATE NULL,
  valor_total FLOAT NULL,
  forma_pagamento VARCHAR(100) NULL,
  data_entrada DATE NULL,
  data_saida DATE NULL,
  PRIMARY KEY(id),
  INDEX contratos_reservas_FKIndex1(quartos_id),
  INDEX contratos_reservas_FKIndex2(clientes_id),
  FOREIGN KEY(quartos_id)
    REFERENCES quartos(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(clientes_id)
    REFERENCES clientes(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE checkins (
  id INTEGER NOT NULL AUTO_INCREMENT,
  funcionarios_id INTEGER NOT NULL,
  contratos_reservas_id INTEGER NOT NULL,
  data_checkin DATE NULL,
  PRIMARY KEY(id),
  INDEX checkins_FKIndex1(contratos_reservas_id),
  INDEX checkins_FKIndex2(funcionarios_id),
  FOREIGN KEY(contratos_reservas_id)
    REFERENCES contratos_reservas(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(funcionarios_id)
    REFERENCES funcionarios(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE contratos_alugueis (
  id INTEGER NOT NULL AUTO_INCREMENT,
  checkins_id INTEGER NOT NULL,
  data_aluguel DATE NULL,
  PRIMARY KEY(id),
  INDEX contratos_alugueis_FKIndex1(checkins_id),
  FOREIGN KEY(checkins_id)
    REFERENCES checkins(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE checkouts (
  id INTEGER NOT NULL AUTO_INCREMENT,
  contratos_alugueis_id INTEGER NOT NULL,
  data_saida_c DATE NULL,
  avarias BOOL NULL,
  descricoes TEXT NULL,
  PRIMARY KEY(id),
  INDEX checkouts_FKIndex1(contratos_alugueis_id),
  FOREIGN KEY(contratos_alugueis_id)
    REFERENCES contratos_alugueis(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE notas_fiscais (
  id INTEGER NOT NULL AUTO_INCREMENT,
  checkouts_id INTEGER NOT NULL,
  data_nota DATE NULL,
  forma_pagamento VARCHAR(100) NULL,
  valor_total FLOAT NULL,
  PRIMARY KEY(id),
  INDEX notas_fiscais_FKIndex1(checkouts_id),
  FOREIGN KEY(checkouts_id)
    REFERENCES checkouts(id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

