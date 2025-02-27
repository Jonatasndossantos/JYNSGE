create database jynsge;

use jynsge;

show tables from jynsge;

select * from users;

#create table usuario(
#   codigo int not null primary key auto_increment,
#   nome varchar(120),
#   email varchar(100),
#   senha int,
#   dataCadastro date,
#   codigoComentario int not null,
#   codigoNoticia int not null   
#)engine = InnoDB;

create table perfil(
	codigo int not null primary key auto_increment,
	bigrafia varchar(120),
	fotodeperfil varchar(120),
    codigoPublicacao int not null,
    codigoPerfil int not null, 
    codigoUsuario int not null
)engine = InnoDB;

create table noticia(
	codigo int not null primary key auto_increment,
    titulo varchar(120),
    linkImg varchar(45),
    texto varchar(450),
    dtPublicao date,
    codigoUsuario int not null
    
)engine = InnoDB;

create table comentario(
	codigo int not null primary key auto_increment,
    texto varchar(150),
    dataPublicacao date,
    codigoNoticia int not null
   
)engine = InnoDB;

create table publicacao(
	codigo int not null primary key auto_increment,
	dataPublicacao date,
    texto varchar(150),
    codigoUsuario int not null,
    codigoPerfil int not null
)engine = InnoDB;

create table fazerPerfil(
	codig int not null,
    codigoUsuario int not null,
    codigoPerfil int not null
)engine = InnoDB;

alter table estudante drop column nota; -- exclui a coluna da tabela

alter table publicacao add constraint publicacaoUsuario
foreign key(codigoUsuario) references usuario(codigo);  

alter table publicacao add constraint publicacaoPerfil
foreign key(codigoPerfil) references perfil(codigo); 

alter table fazerPerfil add constraint fazerPerfilPerfil
foreign key(codigoPerfil) references perfil(codigo);

alter table fazerPerfil add constraint fazerPerfilUsuario
foreign key(codigoUsuario) references usuario(codigo);

alter table noticia add constraint noticiaUsuario
foreign key(codigoUsuario) references usuario(codigo);

select * from comentario; -- visualizar todas as colunas da tabela com os 
select * from noticia; -- visualizar todas as colunas da tabela com os 
select * from publicacao; -- visualizar todas as colunas da tabela com os 
select * from fazerPerfil; -- visualizar todas as colunas da tabela com os 


drop table usuario; -- apaga a tabela inteira
drop table perfil; -- apaga a tabela inteira
drop table noticia; -- apaga a tabela inteira
drop table comentario; -- apaga a tabela inteira
drop table fazerPerfil; -- apaga a tabela inteira
drop table publicacao; -- apaga a tabela inteira
  


