CREATE TABLE PERSONNEL (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(70) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  login VARCHAR(30) NOT NULL,
  mdp VARCHAR(64) NOT NULL,
  admin BOOLEAN,
  cpt_renouvellement INT NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

INSERT INTO PERSONNEL (nom, prenom, login, mdp, admin, cpt_renouvellement) VALUES  
('faretie','benjamin','fb','35ce1d4eb0f666cd136987d34f64aedc',TRUE,5),
('perre','matthieu','pm','5109d85d95fece7816d9704e6e5b1279',FALSE,30),
('woodman','clara','wc','f19dd0a394936417e1b89b4a4d7b1b2d',FALSE,50);

CREATE TABLE IMAGES (
  idImg INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nomImg VARCHAR(70) NOT NULL,
  nomTest VARCHAR(70) NOT NULL,
  dateImg VARCHAR(25) NOT NULL,
  heure VARCHAR(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

INSERT INTO IMAGES (nomImg, nomTest, dateImg, heure) VALUES  
('img1.jpg','Test1','2022-2-27','18:34:25'),
('img2.jpg','Test1','2021-2-27','17:34:25'),
('img4.jpg','Test1','2020-2-27','16:34:25'),
('img1.jpg','Test2','2019-2-27','15:34:25'),
('img2.jpg','Test2','2018-2-27','14:34:25'),
('img5.jpg','Test2','2017-2-27','13:34:25');

CREATE TABLE LASTMDP (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  login VARCHAR(30) NOT NULL,
  mdp VARCHAR(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;


INSERT INTO LASTMDP (login, mdp) VALUES  
('wc',''),
('wc','');


CREATE TABLE LOGS (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  login VARCHAR(30) NOT NULL,
  action VARCHAR(60) NOT NULL,
  date VARCHAR(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

INSERT INTO IMAGES (login, action, date) VALUES  
(12, 'fb', 's\'est connecté.e', '04/06/22 à 16:06'),
(14, 'fb', 's\'est connecté.e', '06/06/22 à 03:06'),
(15, 'fb', 's\'est connecté.e', '06/06/22 à 03:06'),
(16, 'fb', 's\'est connecté.e', '06/06/22 à 03:06'),
(17, 'fb', 's\'est connecté.e', '06/06/22 à 08:06'),
(20, 'fb', 'a recherché les images du Test2', '06/06/22 à 09:06'),
(21, 'fb', 's\'est connecté.e', '07/06/22 à 09:06'),
(22, 'pm', 's\'est connecté.e', '07/06/22 à 09:06'),
(23, 'fb', 's\'est connecté.e', '07/06/22 à 10:06'),
(24, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(25, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(26, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(27, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(28, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(29, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(30, 'fb', 's\'est connecté.e', '07/06/22 à 10:06'),
(31, 'fb', 's\'est connecté.e', '07/06/22 à 10:06'),
(32, 'fb', 's\'est connecté.e', '07/06/22 à 10:06'),
(33, 'fb', 's\'est connecté.e', '07/06/22 à 10:06'),
(34, 'fb', 's\'est connecté.e', '07/06/22 à 10:06'),
(35, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(36, 'fb', 's\'est connecté.e', '07/06/22 à 10:06'),
(37, 'fb', 's\'est connecté.e', '07/06/22 à 10:06'),
(38, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(39, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(40, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(41, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(42, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(43, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(44, 'pm', 's\'est connecté.e', '07/06/22 à 10:06'),
(45, 'fb', 's\'est connecté.e', '07/06/22 à 10:06'),
(46, 'pm', 's\'est connecté.e', '07/06/22 à 11:06'),
(47, 'fb', 's\'est connecté.e', '07/06/22 à 11:06'),
(48, 'pm', 's\'est connecté.e', '07/06/22 à 11:06'),
(49, 'pm', 's\'est connecté.e', '07/06/22 à 11:06'),
(50, 'pm', 's\'est connecté.e', '07/06/22 à 11:06'),
(51, 'pm', 's\'est connecté.e', '07/06/22 à 11:06'),
(52, 'pm', 's\'est connecté.e', '07/06/22 à 11:06'),
(53, 'fb', 's\'est connecté.e', '07/06/22 à 12:06'),
(54, 'fb', 'a recherché les images du Test2', '07/06/22 à 15:06'),
(55, 'fb', 'a recherché les images du Test1', '07/06/22 à 15:06'),
(56, 'pm', 's\'est connecté.e', '07/06/22 à 15:06'),
(57, 'pm', 'a recherché les images du Test2', '07/06/22 à 15:06'),
(58, 'pm', 'a recherché les images du Test2', '07/06/22 à 16:06'),
(59, 'pm', 'a recherché les images du Test1', '07/06/22 à 17:06'),
(60, 'fb', 's\'est connecté.e', '09/06/22 à 08:06'),
(61, 'fb', 'a recherché les images du Test2', '09/06/22 à 08:06'),
(62, 'fb', 's\'est connecté.e', '12/06/22 à 15:06'),
(63, 'fb', 's\'est connecté.e', '13/06/22 à 07:06'),
(64, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(65, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(66, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(67, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(68, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(69, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(70, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(71, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(72, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(73, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(74, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(75, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(76, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(77, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(78, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(79, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(80, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(81, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(82, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(83, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(84, 'pm', 's\'est connecté.e', '13/06/22 à 08:06'),
(85, 'wc', 's\'est connecté.e', '13/06/22 à 08:06'),
(86, 'wc', 's\'est connecté.e', '13/06/22 à 08:06'),
(87, 'fb', 's\'est connecté.e', '13/06/22 à 10:06'),
(88, 'fb', 'a recherché les images du Test2', '13/06/22 à 10:06'),
(89, 'pcam', 's\'est connecté.e', '13/06/22 à 12:06'),
(90, 'pcam', 'a recherché les images du Test1', '13/06/22 à 12:06'),
(91, 'fb', 's\'est connecté.e', '13/06/22 à 12:06'),
(92, 'fb', 'a recherché les images du Test1', '13/06/22 à 12:06'),
(93, 'fb', 'a recherché les images du Test1', '13/06/22 à 17:06'),
(94, 'fb', 's\'est connecté.e', '14/06/22 à 07:06'),
(95, 'fb', 'a recherché les images du Test1', '14/06/22 à 07:06'),
(96, 'fb', 's\'est connecté.e', '14/06/22 à 07:06'),
(97, 'fb', 'a recherché les images du Test1', '14/06/22 à 07:06'),
(98, 'fb', 'a recherché les images du Test1', '14/06/22 à 07:06'),
(99, 'fb', 's\'est connecté.e', '14/06/22 à 13:06'),
(100, 'fb', 's\'est connecté.e', '15/06/22 à 09:06'),
(101, 'fb', 's\'est connecté.e', '15/06/22 à 14:06'),
(102, 'wc', 's\'est connecté.e', '15/06/22 à 14:06'),
(103, 'fb', 's\'est connecté.e', '15/06/22 à 14:06'),
(104, 'fb', 's\'est connecté.e', '15/06/22 à 14:06'),
(105, 'fb', 's\'est connecté.e', '15/06/22 à 14:06'),
(106, 'fb', 's\'est connecté.e', '15/06/22 à 14:06'),
(107, 'fb', 's\'est connecté.e', '15/06/22 à 14:06'),
(108, 'fb', 'a supprimé l\'utilisateur wc', '15/06/22 à 16:06');

