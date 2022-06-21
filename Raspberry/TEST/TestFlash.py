# importing libraries
import cv2
import numpy as np
import TakeAShot



def LaTotale(cheminImg):
    Noir = 30  # pourcentage maximal accepté de pixel noir
    if TauxNoir(cheminImg) > Noir:
        Allumer_lumiere()
        TakeAShot.PrisePhoto(path_pics, path_dir)
    else:
        Eteindre_lumiere()
    Eteindre_lumiere()

def TauxNoir(cheminImg):
    # Chemin du fichier
    img = cv2.imread(cheminImg)
    cv2.imshow('Image', img)

    # Compte des pixels
    pxBlanc = np.sum(img == 255)
    pxNoir = np.sum(img == 0)
    Taux = pxNoir / (1920 * 1080) * 100

    #debug affichage
    print('Number of white pixels:', pxBlanc)
    print('Number of black pixels:', pxNoir, '\n')
    #print ('Pourcentage de pixel noir :', Taux + '%')
    return Taux

#test
TauxNoir("img1.jpg")
print(TauxNoir("img1.jpg"))

def Allumer_lumiere():
    GPIO.setmode(GPIO.BOARD) #transforme la plaque en des ports numérotés
    GPIO.setwarnings(False)
    LED = 1 #Emplacement du branchement de la LED sur la plaque
    GPIO.setup(LED, GPIO.OUT) # On définit la LED en tant que sortie à l'état bas (éteint)
    GPIO.output(LED,GPIO.HIGH) #Mise sous tension de la broche LED

def Eteindre_lumiere():
    GPIO.setmode(GPIO.BOARD)#transforme la plaque en des ports numérotés
    GPIO.setwarnings(False)
    LED = 1 #Emplacement du branchement de la LED sur la plaque
    GPIO.setup(LED, GPIO.OUT)  # On définit la LED en tant que sortie à l'état bas(éteint)
    GPIO.output(LED, GPIO.LOW) #Mise hors tension de la broche LED
