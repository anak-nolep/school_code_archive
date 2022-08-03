#!/bin/python3
"""
Soal        : 7
Modelsoal   : 2
"""

def biaya(kategorii, jalurr, bulann): #No switch case ?
    if(jalurr == "SBMPTN"):
        if(kategorii == "A"):
            dsp = 5000000
            spp = 500000
        elif (kategorii=="B"):
            dsp = 15000000
            spp = 1000000
        elif(kategorii == "C"):
            dsp = 30000000
            spp = 2000000

    elif(jalurr=="SNMPTN"):
        if(kategorii=="A"):
            dsp = 7000000
            spp = 500000
        elif(kategorii=="B"):
            dsp = 17000000
            spp = 1000000
        elif(kategorii=="C"):
            dsp = 35000000
            spp = 2000000

    elif(jalurr=="Mandiri"):
        if(kategorii=="A"):
            dsp = 10000000
            spp = 1000000
        elif(kategorii=="B"):
            dsp = 25000000
            spp = 2000000
        elif(kategorii=="C"):
            dsp = 50000000
            spp = 3000000

    return dsp+(spp*bulann)

nama=["Mira","Nina","Oemar","Pena"]
jalur=["SBMPTN","SNMPTN","Mandiri","SBMPTN"]
alamat=["Sawojajar","Kedung Kandang","Ijen","Dinoyo"]

id=int(input("masukkan id mahasiswa       : "))-1
#id=2-1
if(id<0 | id>len(nama)):
    print("Invalid input\n");exit(0)

ortu=int(input("masukkan pendapat ortu      : "))
bulan=int(input("masukkan jumlah bulan spp   : "))
#ortu=20000
#bulan=2

if (ortu >10000000):
    kategori = "C"
elif (ortu >=2000000):
    kategori = "B"
elif (ortu <=2000000):
    kategori = "A"

print(
f"""
=================================
Id mahasiswa                    : {id+1}
Nama mahasiswa                  : {nama[id]}

Jalur masuk                     : {jalur[id]}
Kategori pemdapatan             : {kategori}
Jumlah biaya                    : {biaya(kategori,jalur[id],bulan)}
Alamat                          : {alamat[id]}
=================================
""")