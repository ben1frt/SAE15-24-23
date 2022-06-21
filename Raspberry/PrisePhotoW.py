import sys
import TakeAShot

#démarrage du fichier avec des arguments supplémentaire

print('Number of arguments:', len(sys.argv), 'arguments.')
print('Argument List:', str(sys.argv))

TakeAShot.PrisePhoto(sys.argv[1])

