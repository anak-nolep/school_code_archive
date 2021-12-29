/*
Soal        : 1
A           : 5
B           : 9
Suku akhir  : 21
*/

#include <stdio.h>

int main(){
    int A=5,
        B=9,
        suku_akhir=2,
        u=A,
        s=A;
    printf("Deret Aritmatikanya adalah \n");
    for(int i=0;i<suku_akhir;i++){
        printf("Angka U awal = %d\n", u);
        printf("Angka S awal = %d\n", s); 
        u=u+B;
        s=s+u;   
        printf("Angka U awal = %d\n", u);
        printf("Angka S awal = %d\n", s); 
    }
    printf("S = s - u = %d - %d = %d\n", s, u, (s-u));
    s=s-u;
    printf("Jumlah Deret Aritmatikanya adalah %d\n", s);
}
