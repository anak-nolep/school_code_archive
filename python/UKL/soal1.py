#!/bin/python3
"""
Soal        : 1
A           : 5
B           : 9
Suku akhir  : 21
"""

A=5
B=9
suku_akhir=2
u=A
s=A
print("Deret Aritmatikanya adalah"); 
for x in range(suku_akhir):
    print(f"Angka U awal = {u}")
    print(f"Angka S awal = {s}") 
    u=u+B; 
    s=s+u;    
    print(f"Angka U akhir = {u}")
    print(f"Angka S akhir = {s}")

print("S = s-u = {}- {} = {}".format(s,u,(s-u))); 
s=s-u
print("Jumlah Deret Aritmatikanya adalah {s}");
