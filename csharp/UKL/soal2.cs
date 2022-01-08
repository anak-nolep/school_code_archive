/*
Soal    : 2
A       : 5
B       : 6
*/

using System;

internal static class soal2{
    private static void Main(){
        int A=5,
            B=9,
            u=A,
            s=A;
        Console.WriteLine("Deret Aritmatikanya adalah");
        for(int i=0;i<5;i++){                            
            for(int j=0;j<6;j++){  
                Console.Write(u+"\t"); 
                u=u+B;
                s=s+u;
            }
            Console.WriteLine();
        }
        s=s-u;
        Console.WriteLine("Jumlah Deret Aritmatikanya adalah " + s); 
    }
}