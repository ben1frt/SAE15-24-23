import os
import subprocess
from datetime import datetime
import BDD
import time



def PrisePhoto(projet, nom_image =''):

    if nom_image == '':
        date_today = datetime.now()
        nom_image = date_today.strftime('%d:%m_%H:%M:%S')
        print(nom_image)

    path_dir = "/home/pi/Desktop/" + projet + "/"
    try: #Verfication de la presence du Repertoire, si oui passe à la suite sinon le créer.
        os.makedirs(path_dir)
    except FileExistsError:
        pass

    directeur = os.listdir('/dev/')
    ls = []
    SortieVirtuelle = 13
    for i in directeur:
        if i.startswith('video') == True : #Nombre de sortie correspondante a video*
            ls.append(i)
    NbCam = (len(ls) - SortieVirtuelle)
    print("il y a", NbCam/2, "caméras connecté")
    
    i = 0
    Num = 1
    lste = []
    while i < NbCam:
        path_pics = path_dir + nom_image +'Cam'+ str(Num) + '.jpeg'
        commande =  "fswebcam -r 1280x720 --no-banner --device /dev/video"+ str(i) + " --skip 1 " + path_pics # prise de photo avec la caméra
        print(commande)
        os.system(commande)
        nom = nom_image +'Cam'+ str(Num) + '.jpeg'
        BDD.MaJBDD(projet, nom)
        Num = Num + 1
        i = i + 2
        print("J'ai pris", i/2, "photos")
        lste.append(path_pics)
        
    return lste

    



    #https://raspberrypi-guide.github.io/electronics/using-usb-webcams
PrisePhoto('NBCAM')