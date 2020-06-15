create database revenda;
use revenda;

create table cidade (
	id_cidade INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cidade varchar(50) not null,
	uf varchar(2) not null
);
INSERT INTO cidade(id_cidade,cidade,uf) VALUES ('1','Três Passos','RS');

create table modelo (
	cod_modelo INT AUTO_INCREMENT PRIMARY KEY
);
create table proprietario (
	cod_proprietario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_proprietario varchar(45) not null,
    rg varchar(14) not null,
    cpf varchar(14) not null,
    endereco varchar(100),
    telefone varchar(20) not null,
    cep varchar(15) not null,
    id_cidade int not null,
    constraint fk_cidade foreign key (id_cidade) references cidade(id_cidade)
);
INSERT INTO proprietario(cod_proprietario,nome_proprietario,rg,cpf,telefone,cep,id_cidade) VALUES ('1','Thiago motos e Automóveis','24.704.082-4','251.307.760-11','553522-2371','98600-000','1');
INSERT INTO proprietario(cod_proprietario,nome_proprietario,rg,cpf,telefone,cep,id_cidade) VALUES ('2','Gera sul Veiculos','21.216.824-1','917.445.600-80',' 553522-1125','98600-000','1');

create table veiculos(
	cod_veiculos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cod_modelo integer,
    ano varchar(4) not null,
    cor varchar(20) not null,
    valor float not null,
    renavam varchar(45),
    placa varchar(10),
    cod_chassi varchar(25),
    data_entrada date,
    cod_marca int not null,
    tipo_veiculo varchar(30) not null,
    modelo_veiculo varchar(30) not null,
    marca_veiculo varchar(30) not null,
    cod_proprietario int not null,
    constraint fk_proprietario foreign key (cod_proprietario) references proprietario(cod_proprietario),
    constraint fk_modelo foreign key (cod_modelo) references modelo(cod_modelo)
);

INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('1','Branca','23.500','GSX 650F','2012','Outros','1','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('2','Azul/Laranja','9.200','HOUJUE DK 150 CBS','0KM','Outros','1','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('3','Verde','20.900','KAWASAKI KX 250f','2013','Outros','1','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('4','Vermelha','19.900','KAWASAKI NINJA 300CC','2017','Outros','1','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('5','Preta','14.900','CB 250 TWISTER','2019','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('6','Vermelha','14.500','CB 250 TWISTER','2017','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('7','Preta','6.900 ','CB TWISTER 250','2008','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('8','Amarela','6.900','CB TWISTER 250','2007','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('9','Vermelha','13.500 ','CRF 250R','2007','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('10','Vermelha','10.500','CRF 230','2014','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('11','Branca','7.200','BIZ 100','2015','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('12','Preta','6.300','BIZ 100','2013','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('13','Prata','4.900','BIZ 125 ES','2006','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('14','Preta','7.300','BIZ 125','2013','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('15','Azul Marinho','6.900','BIZ 125+','2010','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('16','Vermelha','10.900','BIZ 125 + EX','2018','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('17','Azul','10.300','BIZ 125 EX','2017','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('18','Preta','6.000','CG FAN 125 KS','2014','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('19','Vermelha','5.900','CG FAN 125 ES','2011','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('20','Prata','6.300','CG FAN 150','2010','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('21','Bordo','6.700','CG FAN ESI','2012','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('22','Preta','6.900','CG FAN ESDI','2011','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('23','Preta','8.500','CG FAN ESDI','2014','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('24','Vermelha','8.500','TITAN 150 ESD','2015','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('25','Roxa','7.500','TITAN 150 EX MIX','2012','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('26','Vermelha','8.750','CG START 160','2015','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('27','Preta','8.900','NXR BROS 150 ESD','2012','Honda','2','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('28','Preta','4.300','YBR 125 K','2008','Yamaha','3','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('29','Vermelha','10.300','FAZER 250','2013','Yamaha','3','Moto','1');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('30','Prata','25.900','C4 1.6','2010','Outros','1','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('31','Prata','56.900','COROLLA XEI AUT','2013','Outros','1','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('32','Prata','38.900','I 30 AUTOMATICO 2.0','2012','Outros','1','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('33','Preta','19.900','PEUGEOT 307 AUT','2006','Outros','1','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('34','Prata','44.900','HB20 1.6 AUTOMÁTICO SEDAM','2015','Outros','1','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('35','Cinza','23.900','COROLLA XLI MANUAL','2003','Outros','1','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('36','Prata','106.900','HILLUX SRV AUTOMÁTICA','2013','Outros','1','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('37','Branco','41.900','HB20 1.0 COMPLETO','2019','Outros','1','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('38','Branco','26.900','FIESTA SE COMPLETO 1.0','2014','Ford','4','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('39','Prata','23.900','ECOSPORT XLT 1.6 COMP','2004','Ford','4','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('40','Preto','38.900','FORD KA 1.0','2018','Ford','4','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('41','Preto','30.900','FIESTA HACTH 1.6 COMPLETO ','2013','Ford','4','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('42','Prata','24.900','ECOSPORT XLS 1.6 COMPLETA','2004','Ford','4','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('43','Azul','56.900','FOCUS SEDAM TITANIUM AUT','2015','Ford','4','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('44','Prata','31.900','FOCUS SEDAM 2.0 COMP','2011','Ford','4','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('45','Prata','20.900','FOCUS 1.6 HATC','2007','Ford','4','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('46','Prata','30.900','ECOSPORT XLT 1.6 COMP','2008','Ford','4','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('47','Vermelha','25.900','FIESTA SEDAM 1.6 COMPLETO','2011','Ford','4','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('48','Branca','24.900','ASTRA SEDAM 2.0 COMPLETO','2008','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('49','Azul','13.900','ASTRA SEDAM 2.0 COMPLETO','2000','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('50','Vermelha','25.900','ASTRA SS HATCH 2.0 COMPLETO','2006','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('51','Vermelha','29.900','MONTANA SPORT 1.4 COMPLETA','2011','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('52','Branca','56.900','CRUZE LTZ AUT C/ TETO SOLAR','2013','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('53','Prata','18.900','CELTA LIFE 4P 1.0 COMPLETO','2009','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('54','Prata','33.900','ONIX LT 1.0 COMPLETO','2013','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('55','Prata','33.900','S10 ADVANTAGE','2007','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('56','Branco','41.900','ONIX 1.4 LTZ','2015','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('57','Bege','14.900','CORSA SEDAM BASICO','2007','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('58','Branco','9.900','CORSA SEDAM GL 1.6 COMPLETO','1997','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('59','Vermelha','19.900','CELTA SPIRIT 4 PORTAS COMPLETO','2011','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('60','Prata','18.900','ASTRA HACTH ELEGANCE COMP 2.0','2005','Chevrolet','5','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('61','Vermelho','35.900','PALIO ACTRATIVE 1.4 COMP','2016','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('62','Branco','24.900','PALIO ECONOMY 1.0 COMPLETO 2P','2015','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('63','Prata','24.900','PALIO 4 PORTAS 1.0 COMPLETO','2013','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('64','Prata','12.900','UNO FIRE 1.0 BASICO','2008','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('65','Branca','32.900','STRADA WORKING 1.4 BASICA','2016','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('66','Branca','36.900','STRADA 1.4 COMPLETA','2016','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('67','Bege','33.900','SIENA ELX 1.4 COMPLETO','2014','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('68','Prata','24.900','SIENA ELX 1.0 COMPLETO','2010','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('69','Branca','52.900','FIORINO FURGAO 1.4 COMPLETO','2018','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('70','Branca','29.900','STRADA 1.4 COMPLETA','2012','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('71','Vermelho','16.900','SIENA 1.0 COMPLETO','2006','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('72','Cinza','22.900','UNOVIVACE 1.0 COMPLETO 4 PORTAS','2011','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('73','Preto','19.900','UNO WEY 1.0 4 PORTAS AR','2012','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('74','Cinza','29.00','PALIO ADVENTURE LOCKER 1.8','2009','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('75','Preto','10.900','PALIO FIRE 1.0','2002','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('76','Prata','32.900','PALIO WAY 1.0 COMPLETO','2016','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('77','Branco','14.900','UNO 2 PORTAS BASICO','2012','Fiat','6','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('78','Prata','114.900','AMAROK HIGHLINE','2015','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('79','Prata','35.900','POLO SEDAN 1.6 COMFORTLINE','2013','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('80','Branca','29.900','SAVEIRO 1.6 BASICA','2014','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('81','Preto','23.900','FOX 1.0 4 PORTAS AR','2011','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('82','Vermelho','15.900','FOX 1.0 BASICO','2007','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('83','Prata','24.900','POLO 1.6 COMPLETO','2008','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('84','Preta','24.900','VOYAGE TREND 1.0 COMPLETO','2010','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('85','Vermelho','33.900','GOLD SPORTLINE 1.6 COMP','2009','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('86','Preta','23.900','GOL G6 4PORTAS BASICO ','2013','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('87','Branco','21.500','FOX 1.0 COMPLETO','2010','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('88','Preto','29.900','NEW BEETLE 2.0 AUT','2007','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('89','Vermelho','35.900','GOL RALLYE 1.6 COMP','2014','Volkswagen','7','Carro','2');
INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('90','Prata','38.900','VOYAGE TRENDLINE 1.6 COMP','2017','Volkswagen','7','Carro','2');

create table revisao (
	cod_revisao INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    data_revisao varchar(15),
    quilometragem varchar(10),
    revisao_feita varchar(450),
    cod_veiculos int not null,
    constraint fk_veiculos foreign key (cod_veiculos) references veiculos(cod_veiculos)
);


create table compra (
	cod_compra INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	data_compra varchar(15),
	valor_compra varchar(30),
    cod_veiculos int not null,
    cod_proprietario int not null
);
alter table compra add
constraint fk_veiculo foreign key (cod_veiculos) references veiculos(cod_veiculos);
alter table  compra add
constraint fk_propriet foreign key (cod_proprietario) references proprietario(cod_proprietario);



create table vendedor (
	cod_vendedor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(70) not null,
    endereco varchar(100),
    cep varchar(15) not null,
    telefone varchar(20) not null,
    id_cidade int not null,
    constraint fk_cid foreign key (id_cidade) references cidade(id_cidade)
);

INSERT INTO vendedor(cod_vendedor,nome,cep,telefone,id_cidade) VALUES ('1','Jonathan Gabriel','98600-000','5535222371','1');
INSERT INTO vendedor(cod_vendedor,nome,cep,telefone,id_cidade) VALUES ('2','Ramon Henrique','98600-000','5535222371','1');
INSERT INTO vendedor(cod_vendedor,nome,cep,telefone,id_cidade) VALUES ('3','Gabriel Ortiz','98600-000','5535222371','1');

create table cliente (
	cod_cliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_cliente varchar(45),
    cpf varchar(14) not null,
    endereco varchar(100),
    cep varchar(15) not null,
    telefone varchar(20) not null,
    email varchar(45),
    id_cidade int not null,
    constraint fk_cida foreign key (id_cidade) references cidade(id_cidade)
);
insert into cliente(cod_cliente,nome_cliente,cpf,cep,telefone,id_cidade) values ('1','Paulo SIlvira','508.238.700-65','98600-000','55990279684','1');
insert into cliente(cod_cliente,nome_cliente,cpf,cep,telefone,id_cidade) values ('2','Ana Maria dos Santos','486.096.920-00','98600-000','55997070989','1');
insert into cliente(cod_cliente,nome_cliente,cpf,cep,telefone,id_cidade) values ('3','Pedro Henrique','903.294.670-69','98600-000','55991804608','1');
insert into cliente(cod_cliente,nome_cliente,cpf,cep,telefone,id_cidade) values ('4','Pedro José Alvez','188.310.070-41','98600-000','55998942364','1');
insert into cliente(cod_cliente,nome_cliente,cpf,cep,telefone,id_cidade) values ('5','Júlia Alvarez','113.355.030-48','98600-000','55992120996','1');
insert into cliente(cod_cliente,nome_cliente,cpf,cep,telefone,id_cidade) values ('6','Antonieta Maria','605.217.490-00','98600-000','55991901144','1');
insert into cliente(cod_cliente,nome_cliente,cpf,cep,telefone,id_cidade) values ('7','João do Nascimento','205.931.430-51','98600-000','55995468596','1');
insert into cliente(cod_cliente,nome_cliente,cpf,cep,telefone,id_cidade) values ('8','Pedro dos Santos','101.013.250-45','98600-000','55998727063','1');
insert into cliente(cod_cliente,nome_cliente,cpf,cep,telefone,id_cidade) values ('9','Anastacia de Jesus','750.305.060-80','98600-000','55995317215','1');
insert into cliente(cod_cliente,nome_cliente,cpf,cep,telefone,id_cidade) values ('10','Pedro Haisen','181.674.060-83','98600-000','55998331274','1');


create table comissao (
	cod_comissao INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    valor float,
    cod_vendedor int not null,
    constraint fk_vendedor foreign key (cod_vendedor) references vendedor(cod_vendedor)
);
insert into comissao(cod_comissao,valor,cod_vendedor) values ('1','2','2');
insert into comissao(cod_comissao,valor,cod_vendedor) values ('2','2','2');
insert into comissao(cod_comissao,valor,cod_vendedor) values ('3','2','3');
create table venda (
	cod_venda INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    data_venda varchar(15),
    valor_venda varchar(30),
    comissao_vend varchar(20),
    cod_vendedor int not null,
    cod_cliente int not null
);
alter table venda add
constraint fk_vend foreign key (cod_vendedor) references vendedor(cod_vendedor);
alter table venda add
constraint fk_cliente foreign key (cod_cliente) references cliente(cod_cliente);

insert into venda(cod_venda,valor_venda,cod_vendedor,cod_cliente) values ('1','36.900','2','3');
insert into venda(cod_venda,valor_venda,cod_vendedor,cod_cliente) values ('2','8.500','2','7');


create table item_venda (
	cod_item int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    it_venda varchar (200),
    cod_venda int not null,
    constraint fk_venda foreign key (cod_venda) references venda(cod_venda)
);

insert into item_venda(cod_item,it_venda,cod_venda) values ('1','STRADA 1.4 COMPLETA','1');
insert into item_venda (cod_item,it_venda,cod_venda) values ('2','CG FAN ESDI', '2');

create table usuario ( 
	cod_usuario int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome Varchar(100) not null,
    Login Varchar(20) not null,
    Senha Varchar(20) not null
);
