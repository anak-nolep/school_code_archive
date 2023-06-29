/*
Soal        : 1
a           : 5
B           : 9
Suku akhir  : 21
*/

#include <stdio.h>

int main(){
    int a=5,
        B=9,
        suku_akhir=2,
        u=a,
        s=a,
        total=0;
    printf("Deret aritmatikanya adalah \n");
    for(int i=0;i<suku_akhir;i++){
        printf("Angka U awal = %d\n", u);
        printf("Angka S awal = %d\n", s); 
        u+=B;
        s+=u;   
        printf("Angka U awal = %d\n", u);
        printf("Angka S awal = %d\n", s); 
    }
    printf("S = s - u = %d - %d = %d\n", s, u, (s-u));
    total=s-u;
    printf("Jumlah deret aritmatikanya adalah %d\n", s);
}
