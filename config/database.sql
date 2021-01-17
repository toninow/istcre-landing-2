create database cie character set utf8 collate utf8_general_ci;
use cie;

--
-- Estructura de la tabla 'tblUsers'
--

CREATE TABLE tblUsers (
  id int(11) NOT NULL,
  userName varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  active bool NOT NULL,
  creationDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updationDate timestamp  DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  idUserType int(11) NOT NULL,
  primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Datos para la tabla 'tbladmin'
--


INSERT INTO tblUsers (id, userName, password, email, active, creationDate, updationDate, idUserType) VALUES
(1, 'admin', '$2a$07$8ECEAgKHQ7KUCZnJs1OZWO3I88BZAS6Pqjtgv5BGFF7SrXKcbtGKy', 'phpgurukulofficial@gmail.com', 1,'2018-05-27 17:51:00', '2018-10-24 18:21:07',1);

-- --------------------------------------------------------

--
-- Estructura para la tabla 'tblUserTypes'
--

CREATE TABLE tblUserTypes (
id int(11) NOT NULL,
userType varchar(50) NOT NULL,
primary key(id)
);

INSERT INTO tblUsertypes (id, userType) values (1, 'admin');

-- --------------------------------------------------------

--
-- Estructura para la tabla 'tblCategories'
--

CREATE TABLE tblCategories (
  id int(11) NOT NULL auto_increment,
  nameCategory varchar(200) DEFAULT NULL,
  description mediumtext,
  creatingDate timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updationDate timestamp  DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  active int(1) DEFAULT NULL,
  primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

select * from tblCategories where active=1;

-- --------------------------------------------------------

--
-- Estructura para la tabla 'tblComments'
--

CREATE TABLE tblComments(
  id int(11) NOT NULL auto_increment,
  idCourse int(11) DEFAULT NULL,
  fullName varchar(120) DEFAULT NULL,
  email varchar(150) DEFAULT NULL,
  comment mediumtext,
  postingDate timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  active boolean NOT NULL,
  primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

select * from tblComments;

-- --------------------------------------------------------

--
-- Estructura para la tabla 'tblOpinions'
--

CREATE TABLE tblOpinions(
  id int(11) NOT NULL auto_increment,
  fullName varchar(120) DEFAULT NULL,
  email varchar(150) DEFAULT NULL,
  comment mediumtext,
  postingDate timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  active boolean NOT NULL,
  primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

select * from tblOpinions;

-- --------------------------------------------------------

--
-- Estructura para la tabla tblCourses
--

CREATE TABLE tblCourses (
  id int(11) NOT NULL auto_increment,
  title varchar (150),
  price float,
  postTopics longtext,
  idCategory int(11) DEFAULT NULL,
  postingDate timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  postDetails longtext,
  updationDate timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  postUrl varchar (200),
  postImage varchar(255) DEFAULT NULL,
  active bool NOT NULL,
  linkReference varchar(255) NOT NULL,
  primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

select * from tblCourses;

-- --------------------------------------------------------

--
-- Estructura para la tabla tblPosts
--

CREATE TABLE tblPosts(
id int(11) NOT NULL auto_increment,
postTitle varchar (150),
postingDate timestamp NULL DEFAULT CURRENT_TIMESTAMP,
postDetails longtext,
updationDate timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
postUrl varchar (200),
postImage varchar(255) DEFAULT NULL,
active bool NOT NULL,
PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura para la tabla tblPhotos
--

CREATE TABLE tblPhotos(
id int(11) NOT NULL auto_increment,
postTitle varchar (150),
postImage varchar(255) DEFAULT NULL,
active boolean NOT NULL,
uploadedDate timestamp NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

select * from tblPhotos;

-- --------------------------------------------------------

-- Clave foránea para usuario y tipo de usuario
alter table tblUsers add constraint user_type_fk foreign key (idUserType) references tblUserTypes (id);

-- Clave foránea para cursos y categorias
alter table tblCourses add constraint course_category_fk foreign key (idCategory) references tblCategories (id);

-- Clave foránea para comentarios y cursos
alter table tblComments add constraint course_comment_fk foreign key (idCourse) references tblCourses (id);





