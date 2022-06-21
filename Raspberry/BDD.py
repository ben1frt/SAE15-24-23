import mysql.connector
import sys
from datetime import datetime

def MaJBDD(projet, nom_image):
        Raspberry = 'localhost'  # adresse ip raspberry
        db = 'wc902563'
        User = 'root'
        Password = 'rt'
        date_today = datetime.now()
        date = date_today.strftime('%y:%d:%m')
        heure = date_today.strftime('%H:%M:%S')
        data_bdd = (projet, nom_image, date, heure)
        
        conn = mysql.connector.connect(host=Raspberry,database=db, user=User, password= Password)

        cursor = conn.cursor()
        cursor.execute( """INSERT INTO IMAGES (nomTest, nomImg, dateImg, heure) VALUES(%s, %s, %s, %s)""", data_bdd)
        conn.commit()

        if conn:
            conn.close()


def MaJMdp():
    Raspberry = 'localhost'  # adresse ip raspberry
    User = 'root'
    Password = 'rt'
    db ='wc902563'

    conn = mysql.connector.connect(host=Raspberry,database=db, user=User, password = Password)
    cursor = conn.cursor()

    cursor.execute("""UPDATE PERSONNEL SET cpt_renouvellement = cpt_renouvellement - 1 WHERE admin = 0""")
    conn.commit()

    if conn:
        conn.close()

MaJMdp()