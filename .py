def posicionesAdyacentes2(self,fila,columna,mapa):
        retorno=[]
        #Norte
        if(fila>=1 and (mapa[fila-1][columna]!="W" and mapa[fila-1][columna]!="X")):
            retorno.append([fila-1,columna])
        #Este
        if(columna<=10 and (mapa[fila][columna+1]!="W" and mapa[fila][columna+1]!="X")):
            retorno.append([fila,columna+1])
        #Sur
        if(fila<=10 and (mapa[fila+1][columna]!="W" and mapa[fila+1][columna]!="X")):
            retorno.append([fila+1,columna])
        #Oeste
        if(columna>=1 and (mapa[fila][columna-1]!="W" and mapa[fila][columna-1]!="X")):
            retorno.append([fila,columna-1])

        return retorno
