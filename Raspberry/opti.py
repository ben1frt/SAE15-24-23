#import Lumiere (non utilisé par le raspberry
import os
import subprocess
from datetime import datetime
import BDD



def PrisePhot(projet ,nom_image):

    if nom_image == '':
        date_today = datetime.now()
        nom_image = date_today.strftime('%d:%m_%H:%M:%S')

    path_pics = ''
    path_pics1 = ''
    path_pics2 = ''
    path_pics3 = ''
    path_pics4 = ''

    path_dir = "/home/pi/Desktop/Banc/" + projet + "/"
    try: #Verfication de la presence du Repertoire, si oui passe à la suite sinon le créer.
        os.makedirs(path_dir)
    except FileExistsError:
        pass

    NbCam = os.system("v4l2-ctl --list-devices | grep '/dev/video*' |wc -l")
    p = subprocess.Popen(["v4l2-ctl --list-devices | grep '/dev/video*' |wc -l"], stdout=subprocess.PIPE, shell=True)
    print (p.stdout.read())
    print(NbCam)

    if NbCam == '2' : #1 caméra
        path_pics = "/home/pi/Desktop/Banc/" + projet + "/" + nom_image +'Cam1'+ '.jpeg'
        commande = "fswebcam -r 1280x720 --no-banner --skip 1" + path_pics  #prise de photo avec la caméra 0 (défaut)
        os.system(commande)

    elif NbCam == '4': #2 caméras
        path_pics1 = "/home/pi/Desktop/Banc/" + projet + "/" + nom_image + 'Cam1' + '.jpeg'
        path_pics2 = "/home/pi/Desktop/Banc/" + projet + "/" + nom_image + 'Cam2' + '.jpeg'
        commande1 = "fswebcam -r 1280x720 --no-banner --skip 1" + path_pics1  # prise de photo avec la caméra 0 (défaut)
        commande2 =  "fswebcam -r 1280x720 --no-banner --device /dev/video2 --skip 1" + path_pics2 # prise de photo avec la caméra 1
        os.system(commande1)
        os.system(commande2)

    elif NbCam =='6': #3 caméras
        path_pics1 = "/home/pi/Desktop/Banc/" + projet + "/" + nom_image + 'Cam1' + '.jpeg'
        path_pics2 = "/home/pi/Desktop/Banc/" + projet + "/" + nom_image + 'Cam2' + '.jpeg'
        path_pics3 = "/home/pi/Desktop/Banc/" + projet + "/" + nom_image + 'Cam3' + '.jpeg'
        commande1 = "fswebcam -r 1280x720 --no-banner --device /dev/video0 --skip 1" + path_pics1  # prise de photo avec la caméra 0 (défaut)
        commande2 = "fswebcam -r 1280x720 --no-banner --device /dev/video2 --skip 1" + path_pics2  # prise de photo avec la caméra 1
        commande3 = "fswebcam -r 1280x720 --no-banner --device /dev/video4 --skip 1" + path_pics3  # prise de photo avec la caméra 2
        os.system(commande1)
        os.system(commande2)
        os.system(commande3)

    elif NbCam =='8': # 4 caméras
        path_pics1 = "/home/pi/Desktop/Banc/" + projet + "/" + nom_image + 'Cam1' + '.jpeg'
        path_pics2 = "/home/pi/Desktop/Banc/" + projet + "/" + nom_image + 'Cam2' + '.jpeg'
        path_pics3 = "/home/pi/Desktop/Banc/" + projet + "/" + nom_image + 'Cam3' + '.jpeg'
        path_pics4 = "/home/pi/Desktop/Banc/" + projet + "/" + nom_image + 'Cam4' + '.jpeg'
        commande1 = "fswebcam -r 1280x720 --no-banner --device /dev/video0 --skip 1" + path_pics1  # prise de photo avec la caméra 0 (défaut)
        commande2 = "fswebcam -r 1280x720 --no-banner --device /dev/video2 --skip 1" + path_pics2  # prise de photo avec la caméra 1
        commande3 = "fswebcam -r 1280x720 --no-banner --device /dev/video4 --skip 1" + path_pics3  # prise de photo avec la caméra 2
        commande4 = "fswebcam -r 1280x720 --no-banner --device /dev/video6 --skip 1" + path_pics4  # prise de photo avec la caméra 2
        os.system(commande1)
        os.system(commande2)
        os.system(commande3)
        os.system(commande4)
    BDD.MaJBDD(projet, nom_image)


    print (path_pics, path_pics1, path_pics2, path_pics3, path_pics4)
    return path_pics, path_pics1, path_pics2, path_pics3, path_pics4



    #https://raspberrypi-guide.github.io/electronics/using-usb-webcams

