/*
Soal    : 2
A       : 5
B       : 6
*/

#include <stdio.h>

int main(){
    int A=5,
        B=9,
        u=A,
        s=A;
    printf("Deret Aritmatikanya adalah\n"); 
    for(int i=0;i<5;i++){                            
        for(int j=0;j<6;j++){  
            printf("%d\t", u); 
            u=u+B;
            s=s+u;
        }
        printf("\n");
    }
    s=s-u;
    printf("Jumlah Deret Aritmatikanya adalah %d\n", s); 
}