#!/bin/python3
"""
Soal          : 3
Gambar        : A
Matrix kolom  : 6
"""

a=5
b=3
kolom=6
u=a
s=b

print("Deret Aritmatikanya adalah"); 
for i in range(kolom):                        
    for j in range(i+1):
        print(u, end="\t")
        u=u+b
        s=s+u
    print()
 
s=s-u; 
print(f"Jumlah Deret Aritmatikanya adalah {s}");
