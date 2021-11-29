#!/bin/python3
"""
Soal    : 5/Soal Array no 1
A       : 3 (3x6 list)
B       : 6 (6x3 list)
"""

A=[
    [1 ,2 ,3 ,4 ,5 ,6 ],
    [7 ,8 ,9 ,5 ,1 ,2 ],
    [3 ,4 ,5 ,6 ,7 ,8 ]
]
B=[
    [1 ,2 ,3 ,4 ,5 ,6 ], 
    [2 ,9 ,1 ,5 ,1 ,2 ],
    [3 ,1 ,5 ,6 ,7 ,8 ]
]
X=len(A) #XYZ axis or something idk
Y=len(A[0])

print("\nHasil A - B\n")

for i in range(X):
    for j in range(Y):
        print(f"{(A[i][j])-(B[i][j])}\t", end="")
    print()
