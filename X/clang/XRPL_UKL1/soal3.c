/*
Soal          : 3
Gambar        : A
Matrix kolom  : 6
*/

#include <stdio.h>

int main(){
    int a=5, 
        b=3,
        kolom=6,
        u=a,
        s=b,
        total;
    printf("Deret Aritmatikanya adalah\n");
    for(int i=0;i<kolom;i++){
        for(int j=0;j<i+1;j++){
            printf("%d\t",u);
            u+=b;
            s+=u;
        }
        printf("\n");
    }
    total=s-u; 
    printf("Jumlah Deret Aritmatikanya adalah %d\n", total);
}
