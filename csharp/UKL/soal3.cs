/*
Soal          : 3
Gambar        : A
Matrix kolom  : 6
*/

using System;

internal static class soal3{
    private static void Main(){
        int a=5, 
            b=3,
            kolom=6,
            u=a,
            s=b;
        Console.WriteLine("Deret Aritmatikanya adalah");
        for(int i=0;i<kolom;i++){
            for(int j=0;j<i+1;j++){
                Console.Write(u+"\t");
                u=u+b;
                s=s+u;
            }
            Console.WriteLine();
        }
        s=s-u;
        Console.WriteLine("Jumlah Deret Aritmatikanya adalah "+s);
    }
}