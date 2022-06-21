import pyodbc


connex = pyodbc.connect('Driver={SQL Server};'
                      	'Server=localhost;'
                      	'Database=fb900813;'
                      	'Trusted_Connection=yes;'
							'UID=fb900813'
							'pwd=fb900813a8e1')

#db.close()

def createtable():
	cursor = connex.cursor()
	cursor.execute('CREATE TABLE TEST (num_test INT PRIMARY KEY NOT NULL,libelle VARCHAR(500) NOT NULL,path_d VARCHAR(100) NOT NULL)')

def droptable(nomtable):
	cursor = connex.cursor()
	cursor.execute("""
		DROP TABLE"""+nomtable)
	connex.commit()

def insertinto():
	cursor = connex.cursor()
	cursor.execute('INSERT INTO TEST VALUES  	(2,"le test fonctionne très bien à ne plus toucher","/Test2/image1.jpeg"),(1,"A revoir","/Test1/image2.jpeg"),(3,"A refaire depuis le test 2","/Test3/image4.jpeg")')




createtable()
insertinto()
cursor = connex.cursor()

for i in cursor:
	cursor.execute('SELECT * FROM TEST')
	print(i)