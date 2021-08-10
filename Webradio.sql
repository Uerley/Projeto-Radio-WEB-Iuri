create database db_webradio;
use db_webradio;

create table tb_login (
	log_codigo int not null auto_increment primary key,
    log_email varchar(30) not null,
    log_senha varchar(15) not null
);

insert into tb_login 
	(log_codigo,log_email,log_senha)
    values
    (1,'tallys@gmail.com','tallys123'),
    (2,'carla@gmail.com','carla123'),
    (3,'uerley@gmail.com','ueley123'),
    (4,'alam@gmail.com','alam123');
    
create table tb_comunicacao (
	comu_nome varchar(40),
    comu_email varchar(40),
    comu_tell varchar(14),
    comu_menssagem varchar(200),
    comu_data timestamp DEFAULT CURRENT_TIMESTAMP,
    comu_codigo int not null auto_increment primary key
);

insert into tb_comunicacao 
	(comu_nome,comu_email,comu_tell,comu_menssagem)
    values
    ('tallys','tallys@gmail.com','5584996316773','oi meu nome é tallys'),
	('carla','carla@gmail.com','5584996316773','oi meu nome é carla'),
	('uerley','euerley@gmail.com','5584996316773','oi meu nome é uerley'),
	('alam','alam@gmail.com','5584996316773','oi meu nome é alam');