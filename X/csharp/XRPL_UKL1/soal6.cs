/*
Soal    : 6 / Soal array 2
A       : 3x2
B       : 2x3
fill    : 2x3
*/

using System;

internal static class soal6{
    private static void Main(){
        int[][] a={
                new int[] {1,8},
                new int[] {3,2},
                new int[] {4,6}
            },
            b={
                new int[] {9,10,21}, //9 + 10 = 21
                new int[] {5, 9, 8}
            },
            fill={
                new int[] {0,0,0},
                new int[] {0,0,0},
                new int[] {0,0,0}
            };
        int kolom1=3,
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
                Console.Write(fill[i][j]+"\t");
            }
            Console.WriteLine();
        }
    }
}