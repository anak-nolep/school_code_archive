/*
Soal    : 2
a       : 5
b       : 6
*/

#include <stdio.h>

int main(){
    int a=5,
        b=9,
        u=a,
        s=a,
        total=0;
    printf("Deret aritmatikanya adalah\n"); 
    for(int i=0;i<5;i++){                            
        for(int j=0;j<6;j++){  
            printf("%d\t", u); 
            u+=b;
            s+=u;
        }
        printf("\n");
    }
    total=s-u;
    printf("Jumlah Deret aritmatikanya adalah %d\n", s); 
}