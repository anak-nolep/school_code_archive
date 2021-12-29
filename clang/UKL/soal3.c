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
        s=b;
    printf("Deret Aritmatikanya adalah\n");
    for(int i=0;i<kolom;i++){
        for(int j=0;j<i+1;j++){
            printf("%d\t",u);
            u=u+b;
            s=s+u;
        }
        printf("\n");
    }
    s=s-u; 
    printf("Jumlah Deret Aritmatikanya adalah %d\n", s);
}
