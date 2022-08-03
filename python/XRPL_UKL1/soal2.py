#!/bin/python3
"""
Soal    : 2
A       : 5
B       : 6
"""

A=5
B=9 
u=A
s=A 
print("Deret Aritmatikanya adalah")
for i in range(5):                        
    for j in range(6):
        print(u, end="\t"); 
        u=u+B;
        s=s+u;
    print(); 

s=s-u
print(f"Jumlah Deret Aritmatikanya adalah {s}"); 
