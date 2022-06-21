import socket

##############################################################

host, port = ('', 5567)
socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
socket.bind((host, port))
print('Serveur démarré.....')


##############################################################

def GetPath(projet):
    return projet #Recuperation de la donnée


##############################################################

try:
    while True:
        socket.listen()
        connexion, address = socket.accept()
        print(address, "is connected \n")

        data = connexion.recv(1024)  # Reception des données avec un buffer de 4096
        projet = data.decode(encoding='utf-8')  # décodage de la donnée
        print(projet, "\n")


except ConnectionRefusedError:
    print("Connexion échoué")
##############################################################
finally:
    connexion.close()
    socket.close()
