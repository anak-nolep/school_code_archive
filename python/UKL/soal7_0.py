#!/bin/python3
"""
Soal        : 7
Modelsoal   : 0
"""

def hitung(nilai):
    bayar=2000
    if (nilai>10):
        bayar=bayar+1000
    if (nilai>20):
        bayar=bayar+1000
    if (nilai>30):
        bayar=bayar+1000
    return nilai*bayar+10000;

namaPelanggan=["Ali", "Budi", "Dani", "Edi", "Umar"];#nama pelanggan 
    
id = int(input("Masukkan jumlah pelanggan : "))-1
#printf("Masukkan id pelanggan : 1");
#id = 1-1;

tagihan = int(input("Masukkan jumlah tagihan : "))
#print("Masukkan jumlah tagihan : 33")
#tagihan = 33

tagihan=hitung(tagihan)

print(f"""
Print Out Tagihan
ID\t: {id+1}
Nama\t: {namaPelanggan[id]}
Tagihan\t: Rp.{tagihan}
""")