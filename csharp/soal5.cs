/*
Soal    : 5/Soal Array no 1
A       : 3 (3x6 list)
B       : 6 (6x3 list)
*/

using System;

internal static class soal5{
    private static void Main(){
        int[][] A={
            new int[] {1 ,2 ,3 ,4 ,5 ,6 },
            new int[] {7 ,8 ,9 ,5 ,1 ,2 },
            new int[] {3 ,4 ,5 ,6 ,7 ,8 }
        },
        B={
            new int[] {1 ,2 ,3 ,4 ,5 ,6 }, 
            new int[] {7 ,8 ,9 ,5 ,1 ,2 },
            new int[] {3 ,4 ,5 ,6 ,7 ,8 }
        };
        int X=3, //XYZ axis or something idk
            Y=6;

        Console.WriteLine("Hasil A - B"); 
        for(int i=0;i<X;i++){
            for(int j=0;j<Y;j++){
                Console.Write((A[i][j]*B[i][j])+"\t");                    
            }
            Console.WriteLine();
        }
    }
}