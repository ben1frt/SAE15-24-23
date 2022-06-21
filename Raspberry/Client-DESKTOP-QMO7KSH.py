import socket

############################################################
AdrRaspberry = '192.168.10.177'
host, port = (AdrRaspberry, 5580)  #Definition de l'adresse et du port du serveur
socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM) #Ouverture de la socket associé
############################################################

try:
    socket.connect((host, port))
    print("Connecté")


    data = input("nom du projet (minuscule)?") #Donnée
    data = data.encode(encoding='utf-8') #Encodage du paquet de donnée
    socket.sendall(data) #Envoie des données

except ConnectionRefusedError:
    print("Connexion échoué")

finally:
    socket.close()
