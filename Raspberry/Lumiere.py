#Fonctionnement :
"""
le programme doit regarder l'état de la photo et vérifier :
- La presence de la couleur noir a un taux N (%) (fonction ?)
- Redemander une photo SI le taux est > N
- Allumer la LED

#Format logique:
variable :
- pxNoir
- Reference
SI pxNoir est supérieure ou égale à Reference :
    Allumer la LED
    Reprendre une photo (appel de la fonction TakeAShot
    code erreur = '0'
Else
    code erreur = '1'

"""
#!/usr/bin/env python3
#-- coding: utf-8 --
from time import sleep

from PIL import Image
import RPi.GPIO as GPIO #Import de la bibliothèque pour contrôler les GPIOs

def CalculPxNoirV2(image): #avec la bibliothèque PIL
    taux = 0
    for x in range(image.width):
        for y in range(image.height):
            if (image[x][y] == [0,0,0]): # SI pixel noir alors :
                taux = i + 1 # compte le nombre de pixel noir
            return taux
    reference = 1036800
    if taux > reference:
        Allumer_lumiere()
    return False


def Allumer_lumiere():
    GPIO.setmode(GPIO.BOARD) #transforme la plaque en des ports numérotés
    GPIO.setwarnings(False)
    LED = 1 #Emplacement du branchement de la LED sur la plaque
    GPIO.setup(LED, GPIO.OUT) # On définit la LED en tant que sortie à l'état bas(éteint)
    GPIO.output(LED,GPIO.HIGH) #Mise sous tension de la broche LED

def Eteindre_lumiere():
    GPIO.setmode(GPIO.BOARD)#transforme la plaque en des ports numérotés
    GPIO.setwarnings(False)
    LED = 1 #Emplacement du branchement de la LED sur la plaque
    GPIO.setup(LED, GPIO.OUT)  # On définit la LED en tant que sortie à l'état bas(éteint)
    GPIO.output(LED, GPIO.LOW) #Mise hors tension de la broche LED


def CalculPxNoirV1(chemin):
    size(1920,1080)#taille de l'image
    img = loadImage (chemin) #chargement de l'image par son emplacement
    taux = 0
    for x in range(0,1920,1): #parcours de l'axe x des pixels de la photo
        for y in range(0,1080,1): #parcours de l'axe y de la photo
            if (image[x][y] == [0, 0, 0]):  # SI pixel noir alors :
                taux = i + 1  # compte le nombre de pixel noir
            return taux
