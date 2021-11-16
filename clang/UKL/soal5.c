/*
Soal    : 5/Soal Array no 1
A       : 3 (3x6 list)
B       : 6 (6x3 list)
*/

#include <stdio.h>

int main(){
    int A[3][6]={
        {1 ,2 ,3 ,4 ,5 ,6 },
        {7 ,8 ,9 ,5 ,1 ,2 },
        {3 ,4 ,5 ,6 ,7 ,8 }
        },
        B[3][6]={
          {1 ,2 ,3 ,4 ,5 ,6 }, 
          {7 ,8 ,9 ,5 ,1 ,2 },
          {3 ,4 ,5 ,6 ,7 ,8 }
        },
        X=3, //XYZ axis or something idk
        Y=6;

    printf("Hasil A - B \n"); 
    for(int i=0;i<X;i++){                    
      for(int j=0;j<Y;j++){               
          printf("%d\t", (A[i][j]*B[i][j]));                    
      } 
      printf("\n"); 
    }
}
