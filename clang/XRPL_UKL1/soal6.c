/*
Soal    : 6 / Soal array 2
A       : 3x2
B       : 2x3
fill    : 2x3
*/
#include <stdio.h>

int main(){
    int a[3][2]={
        {1,8},
        {3,2},
        {4,6}
    },
    b[2][3]={
        {9,10,21}, //9 + 10 = 21
        {5, 9, 8}
    },
    fill[3][3]={
        {0,0,0},
        {0,0,0},
        {0,0,0}
    },
    kolom1=3,
    kolom2=3;

    for(int i=0;i<kolom1;i++){
        for(int j=0;j<kolom2;j++){        
            for(int k=0;k<2;k++){ 
                fill[i][j]=fill[i][j]+a[i][k]*b[k][j];
            }
        }
    }
    for(int i=0;i<kolom1;i++){
        for(int j=0;j<kolom2;j++){
            printf("%d\t", fill[i][j]);
        }
        printf("\n");
    }
}
