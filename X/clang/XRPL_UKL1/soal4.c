/*
Soal          : 4
Gambar        : B
Matrix kolom  : 5
*/

#include <stdio.h>

int main(){
    int A=6,
        B=3,
        kolom=5,
        u=A,
        s=B,
        total=0;
    printf("Deret Aritmatikanya adalah\n");
    for(int i=kolom;i>0;i--){ 
        for(int j=0;j<i;j++){
            printf("%d\t", u);
            u+=B;
            s+=u; 
        }
        printf("\n");
    }
    for(int i=kolom-1;i>0;i--){ 
        for(int j=kolom+1;j>0+i;j--){
            printf("%d\t", u);
            u+=B;
            s+=u; 
        }
        printf("\n");
    }
    total =s-u;
    printf("Jumlah Deret Aritmatikanya adalah %d\n", total);
}
