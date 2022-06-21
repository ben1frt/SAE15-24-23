import socket
from datetime import datetime
import TakeAShot

##############################################################

host, port = ('', 5580)
socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
socket.bind((host, port))
print('Serveur démarré.....')


##############################################################

while True: #Maintient en ligne du serveur du raspberry
    socket.listen()
    connexion, address = socket.accept()
    print(address, "is connected ")

    data = connexion.recv(1024)  # Reception des données avec un buffer de 1024
    projet = data.decode(encoding='utf-8')  # décodage de la donnée
    print(projet, "\n")
    if projet != '':  # si variable non vide
        date_today = datetime.now()
        nom_image = date_today.strftime('%d:%m_%H:%M:%S')
        print(projet, nom_image)
        TakeAShot.PrisePhoto(projet, nom_image)
        Projet = ''


##############################################################

connexion.close()
socket.close()


#netstat -atnp -> retrouver le PID du prgm si erreur