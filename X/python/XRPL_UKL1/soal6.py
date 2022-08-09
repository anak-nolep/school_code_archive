#!/bin/python3
"""
Soal    : 6 / Soal array 2
A       : 3x2
B       : 2x3
fill    : 3x3
"""

a=[
    [1,8],
    [3,2],
    [4,6]
]
b=[
    [9,10,21], #9 + 10 = 21
    [5, 9, 8]
]
fill=[
    [0,0,0],
    [0,0,0],
    [0,0,0]
]
kolom1=len(fill)
kolom2=len(fill[0])
print("Hasil AxB")

for i in range(kolom1):
    for j in range(kolom2):
        for k in range(2):
            fill[i][j]=fill[i][j]+a[i][k]*b[k][j]


for i in range(kolom1):
    for j in range(kolom2):
        print(f"{fill[i][j]}\t", end="")
    print()
