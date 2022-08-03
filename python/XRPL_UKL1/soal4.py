#!/bin/python3
"""
Soal          : 4
Gambar        : B
Matrix kolom  : 5
"""


A=6
B=3
kolom=5
u=A
s=B
print("Deret Aritmatikanya adalah");
for i in range(kolom, 0, -1):
    for j in range(0, i):
        print(u, end="\t")
        u=u+B
        s=s+u
    print()

for i in range(kolom-1):
    for j in range(i+2):
        print(u, end="\t")
        u=u+B
        s=s+u
    print()

s=s-u
print(f"Jumlah Deret Aritmatikanya adalah {s}");
