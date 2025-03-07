create database jynsge;

use jynsge;

show tables from jynsge;

select * from categoria;
select * from noticia;

create table usuario(
   id int not null primary key auto_increment,
   nome varchar(120),
   email varchar(100),
   senha int,
   dataCriacao timestamp,
   idComentario int not null
)engine = InnoDB;

create table noticia(
	id int not null primary key auto_increment,
    titulo varchar(250),
    linkImg varchar(500),
    conteudo Text not null, 
    resumo varchar(500), 
    dtPublicacao timestamp
)engine = InnoDB;


CREATE TABLE categoria (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL UNIQUE,
    descricao varchar(350),
    dataCriacao timestamp
) ENGINE = InnoDB;

CREATE TABLE noticiaCategoria (
	id int primary key not null auto_increment,
    idNoticia INT NOT NULL,
    idCategoria INT NOT NULL,
    FOREIGN KEY (idNoticia) REFERENCES noticia(id) ON DELETE CASCADE,
    FOREIGN KEY (idCategoria) REFERENCES categoria(id) ON DELETE CASCADE
) ENGINE = InnoDB;


create table comentario(
	id int not null primary key auto_increment,
    conteudo varchar(250),
    dataPublicacao timestamp,
    idNoticia int not null,
    idUsuario int not null,
	FOREIGN KEY (idNoticia) REFERENCES noticia(id) ON DELETE CASCADE,
    FOREIGN KEY (idCategoria) REFERENCES categoria(id) ON DELETE CASCADE
)engine = InnoDB;

create table perfil(
	id int not null primary key auto_increment,
	biografia text,
	linkImg varchar(500),
    tipoUsuario boolean not null,
    idUsuario int not null,
	FOREIGN KEY (idUsuario) REFERENCES usuario(id) ON DELETE CASCADE
)engine = InnoDB;


select * from comentario; -- visualizar todas as colunas da tabela com os 
select * from noticia; -- visualizar todas as colunas da tabela com os 

drop table usuario; -- apaga a tabela inteira
drop table perfil; -- apaga a tabela inteira
drop table noticia; -- apaga a tabela inteira
drop table comentario; -- apaga a tabela inteira

  
  insert into categoria (nome, descricao)
  values ('Internet', 'Em nenhum outro lugar você pode ver o quadro completo de como a tecnologia sem fio de amanhã a tecnologia está transformando a eficiência, elevando as experiências do usuário e nos impulsionando rumo a um mundo totalmente conectado.'),
  ('Acessibilidade', 'Descubra como avanços como assistentes de IA, dispositivos domésticos inteligentes, ativação por voz, mudanças no design inclusivo e muito mais estão melhorando a vida das pessoas com habilidades diferentes.'),
  ('AR/VR/XR','As tecnologias que transformaram os jogos estão agora mudando o jogo em outras indústrias e remodelando a forma como as empresas operam em todo o mundo.'),
  ('Inteligência Artificial','Indústrias em transformação. Abrindo novos recursos. Melhorando a eficiência. A inteligência artificial já está melhorando nossas vidas de maneiras profundas – e as possibilidades para o futuro são aparentemente ilimitadas.'),
  ('Conteúdo e Entretenimento','Saiba mais sobre as inovações que lideram a transformação do entretenimento, no lugar onde se reúnem marcas que sabem gerar buzz.'),
  ('Saúde Digital', 'Explore os avanços mais recentes em IA, IoT, telessaúde e soluções de saúde digital. Essas tecnologias inovadoras estão remodelando a prestação de cuidados de saúde, melhorando os resultados dos pacientes e aumentando a eficiência operacional.'),
  ('Criptomoedas','No cenário financeiro atual, tecnologia é dinheiro. Este é o momento de abraçar a inovação como a nova moeda - e um investimento valioso no futuro bancário.'),
  ('Tecnologia Alimentar','Descubra as deliciosas possibilidades criadas pelas inovações na agricultura, segurança, nutrição, sabor, embalagem, sustentabilidade e muito mais, e saiba o que está por vir no futuro da alimentação.'),
  ('Jogos e Esportes','Entre no jogo e veja de perto a próxima geração de hardware, software e acessórios que melhoram a experiência do usuário.'),
  ('Robótica','Explore as tecnologias robóticas que melhoram a segurança, estabelecem metas de sustentabilidade ao nosso alcance e, em última análise, criam um mundo melhor.'),
  ('Casa Inteligente','Descubra as inovações que combinam perfeitamente conveniência, eficiência e consciência ecológica, redefinindo o que significa viver de forma inteligente.'),
  ('Tecnologia Espacial','Os avanços na tecnologia de exploração espacial estão melhorando a previsão do tempo, conectividade através de sistemas de satélite e muito mais.'),
  ('Eventos','Eventos de tecnologia são o palco onde o futuro ganha forma, conectando mentes inovadoras e impulsionando ideias que irão transformar o mundo.'),
  ('Tecnologia Veicular','Desde veículos autônomos e conectados até avanços no transporte aéreo, a tecnologia transformou a maneira como vivenciamos a mobilidade.'),
  ('Automação','Desde veículos autônomos e conectados até avanços no transporte aéreo, a tecnologia transformou a maneira como vivenciamos a mobilidade.')

insert into noticia (titulo, linkImg, conteudo, resumo)
values('O Impacto do 5G no Futuro das Cidades Inteligentes', 'cidades.jpg', 'O lançamento da tecnologia 5G está criando novas oportunidades para o desenvolvimento de cidades inteligentes em todo o mundo. Com velocidades de internet mais rápidas e latência extremamente baixa, o 5G promete transformar a maneira como as cidades operam, trazendo avanços significativos em áreas como mobilidade urbana, segurança e gestão de recursos.
Cidades como Nova York, Xangai e Londres estão sendo pioneiras na implementação do 5G, aproveitando essa tecnologia para melhorar o tráfego, otimizar o consumo de energia e até mesmo aprimorar os sistemas de segurança pública. Por exemplo, a integração de sensores de tráfego em tempo real e câmeras conectadas com a rede 5G está permitindo o monitoramento e controle de congestionamentos de forma mais eficiente, criando uma experiência mais fluida para os cidadãos.
Especialistas afirmam que, à medida que a infraestrutura 5G for se expandindo, mais cidades ao redor do mundo terão acesso a essas inovações. Com isso, a expectativa é de que o 5G não apenas otimize a vida urbana, mas também leve a melhorias em qualidade de vida, tornando as cidades mais sustentáveis e interconectadas.','Com velocidades de internet mais rápidas e latência extremamente baixa, o 5G promete transformar a maneira como as cidades operam, trazendo avanços significativos em áreas como mobilidade urbana, segurança e gestão de recursos.'),
('O 5G e o Avanço dos Veículos Autônomos: Como a Conectividade vai Redefinir a Mobilidade','5g.jpg', 'A implementação do 5G está acelerando o desenvolvimento e a adoção de veículos autônomos. Com sua alta capacidade de comunicação em tempo real e baixíssima latência, o 5G proporciona a infraestrutura necessária para que carros, caminhões e outros veículos autônomos possam se comunicar de forma mais eficiente com outros veículos, pedestres e infraestruturas urbanas.
Fabricantes de automóveis como Tesla, Waymo e Audi estão testando seus sistemas de condução autônoma em áreas onde o 5G já foi instalado, observando uma melhoria significativa na segurança e precisão dos veículos. A tecnologia permite que os veículos compartilhem dados em tempo real sobre condições de tráfego, obstáculos e até mesmo acidentes, tornando as viagens mais seguras e dinâmicas.
Além disso, a capacidade do 5G de lidar com grandes volumes de dados em tempo real abre a possibilidade de novos recursos, como veículos autônomos que podem tomar decisões instantâneas com base nas condições ambientais em constante mudança. A indústria automotiva acredita que a combinação de 5G e inteligência artificial pode ser a chave para a criação de um futuro mais seguro e eficiente no transporte.','A implementação do 5G está acelerando o desenvolvimento e a adoção de veículos autônomos. Com sua alta capacidade de comunicação em tempo real e baixíssima latência, o 5G proporciona a infraestrutura necessária para que carros, caminhões e outros veículos autônomos possam se comunicar de forma mais eficiente com outros veículos, pedestres e infraestruturas urbanas.')