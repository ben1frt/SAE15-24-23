

"""from datetime import datetime
from time import strftime

print(datetime.now())
strftime(%H:%M:%S, datetime.now()

"""
from datetime import *
from PIL import Image
#date_today = datetime.now()
#nom_image = date_today.strftime('%H:%M')

date_today = datetime.now()
nom_image = date_today.strftime('%d/%m_%H:%M:%S')
print(nom_image)



def CalculPxNoirV2(Image): #avec la bibliothèque PIL
    taux = 0
    i = 0
    for x in range(Image.width):
        for y in range(Image.height):
            if (Image[x][y] == [0,0,0]): # SI pixel noir alors :
                taux = i + 1 # compte le nombre de pixel noir
            return taux
    reference = 1036800
    #if taux > reference:
     #   Allumer_lumiere()
    return False

path = "ADminvue.png"

print(CalculPxNoirV2(path))