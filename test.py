import random

dado1 = random.randint(1,6)
print('dado1',dado1)
dado2 = random.randint(1,6)
print('dado2',dado2)
suma=dado1+dado2
print('suma',suma)

while ((suma==7) or (dado1==6 and dado2==6) or (((dado1==6) and (dado2%2==1)) or ((dado2==6) and (dado1%2==1)))):
    dado1 = random.randint(1,6)
    dado2 = random.randint(1,6)
    suma=dado1+dado2
    print('dado1',dado1)
    print('dado2',dado2)
    print('suma',suma)
