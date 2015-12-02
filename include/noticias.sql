CREATE TABLE categoria (
   id int(11) NOT NULL auto_increment,
   categoria char(100) NOT NULL,
   PRIMARY KEY  (`id`)
   )TYPE=MyISAM;

CREATE TABLE noticias (
   id int(11) NOT NULL auto_increment,
   categoria char(100) NOT NULL,
   titulo char(100) NOT NULL,
   subtitulo text NOT NULL,
   texto text NOT NULL,
   fonte char(100) NOT NULL,
   fonte_foto char(100) NOT NULL,
   data char(18) NOT NULL,
   hora char(18) NOT NULL,
   dstq char(4) NOT NULL,
   foto varchar(255) default NULL,
   PRIMARY KEY  (`id`)
   )TYPE=MyISAM;

INSERT INTO categoria (id, categoria) VALUES ('','AGROPECU�RIA');
INSERT INTO categoria (id, categoria) VALUES ('','BRASIL');
INSERT INTO categoria (id, categoria) VALUES ('','CIDADE');
INSERT INTO categoria (id, categoria) VALUES ('','CI�NCIA');
INSERT INTO categoria (id, categoria) VALUES ('','CULTURA');
INSERT INTO categoria (id, categoria) VALUES ('','ECONOMIA');
INSERT INTO categoria (id, categoria) VALUES ('','EDUCA��O');
INSERT INTO categoria (id, categoria) VALUES ('','ESPORTES');
INSERT INTO categoria (id, categoria) VALUES ('','GERAL');
INSERT INTO categoria (id, categoria) VALUES ('','INTERNACIONAL');
INSERT INTO categoria (id, categoria) VALUES ('','MULHER');
INSERT INTO categoria (id, categoria) VALUES ('','POL�CIA');
INSERT INTO categoria (id, categoria) VALUES ('','POL�TICA');
INSERT INTO categoria (id, categoria) VALUES ('','RELIGI�O');
INSERT INTO categoria (id, categoria) VALUES ('','SA�DE');
INSERT INTO categoria (id, categoria) VALUES ('','SOCIEDADE');
INSERT INTO categoria (id, categoria) VALUES ('','TECNOLOGIA');
