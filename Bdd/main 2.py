import sqlite3

#db.close()

connex = sqlite3.connect('bdd.odb')

def createtable():
	cursor = connex.cursor()
	cursor.execute('CREATE TABLE TEST (num_test INT PRIMARY KEY NOT NULL,libelle VARCHAR(500) NOT NULL,path_d VARCHAR(100) NOT NULL)')

def droptable(nomtable):
	cursor = conn.cursor()
	cursor.execute("""
		DROP TABLE"""+nomtable)
	conn.commit()

def insertinto():
	cursor = connex.cursor()
	cursor.execute('INSERT INTO TEST VALUES (4,"le test fonctionne très bien à ne plus toucher","/Test2/image1.jpeg"),(3,"A revoir","/Test1/image2.jpeg"),(5,"A refaire depuis le test 2","/Test3/image4.jpeg")')


insertinto()
cursor = connex.cursor()
cursor.execute('SELECT * FROM TEST')

for i in cursor:
    print(i)