import TakeAShot
from datetime import datetime
import Lumiere
import time
import sock


if __name__ == '__main__':
    while True:

        Button = False

        if sock.GetPath(Projet) != '' : #si variable non vide

            date_today = datetime.now()
            nom_image = date_today.strftime('%d/%m_%H:%M:%S')
            path_pics = "/home/pi/Desktop/Banc/"+ Projet + "/" + nom_image  + '.jpeg'
            Projet = ''

            MajMdp()
            TakeAShot.PrisePhoto(path_pics)

        elif Button == True:
                TakeAShot.PrisePhoto(path_pics)
                Button = False
        else:



            Lumiere.Eteindre_lumiere()








