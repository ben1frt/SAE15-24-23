CREATE TABLE INFO_IMG (
    id_img INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    date DATE NOT NULL,
    heure TIME NOT NULL,
    num_cam INT NOT NULL,
    nom_img VARCHAR(100) NOT NULL,
    test_num INT NOT NULL FOREIGN KEY REFERENCES <TEST(num_test)>,
)

CREATE TABLE TEST (
    num_test INT PRIMARY KEY NOT NULL,
    libelle VARCHAR(500) NOT NULL,
    path_d VARCHAR(100) NOT NULL,
)

CREATE TABLE ACCESS (
    id_test INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    test_num INT NOT NULL FOREIGN KEY REFERENCES TEST(num_test),
    pers_id INT NOT NULL FOREIGN KEY REFERENCES TEST(id_pers),
)

CREATE TABLE PERSONNEL (
    id_pers INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    mdp_id VARCHAR(30) NOT NULL FOREIGN KEY REFERENCES TEST(num_test),
)

CREATE TABLE MDP (
    id_mdp INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    mdp VARCHAR(30) NOT NULL,
    cpt_renouvellement INT PRIMARY KEY NOT NULL,
)

INSERT INTO INFO_IMG
    VALUES  (,CAST(2022-04-27 AS DATE),CAST(19:08:48 AS TIME),1,"Nom de l'image numéro 1",2),
            (,CAST(2022-04-28 AS DATE),CAST(20:08:48 AS TIME),2,"Nom de l'image numéro 2",2),
            (,CAST(2022-04-29 AS DATE),CAST(21:08:48 AS TIME),1,"Nom de l'image numéro 11",1)

INSERT INTO TEST
    VALUES  (2,"le test fonctionne très bien à ne plus toucher","/Test2/image1.jpeg"),
            (1,"A revoir","/Test1/image2.jpeg"),
            (3,"A refaire depuis le test 2","/Test3/image4.jpeg")

INSERT INTO ACCESS
    VALUES  (,1,1),
            (,1,2),
            (,1,3), 
            (,2,1),
            (,2,2),
            (,2,3),
            (,3,1)

INSERT INTO PERSONNEL
    VALUES  (1,"faretie";"benjamin",1),
            (2,"perre","matthieu",2),
            (3,"woodman","clara",3)

INSERT INTO MDP
    VALUES  (1,"fb",5);
            (2,"pm",30);
            (3,"wc",50);