/*
Soal          : 4
Gambar        : B
Matrix kolom  : 5
*/

using System;

internal static class soal4{
    private static void Main(){
        int A=6,
            B=3,
            kolom=5,
            u=A,
            s=B;
        Console.WriteLine("Deret Aritmatikanya adalah");
        for(int i=kolom;i>0;i--){ 
            for(int j=0;j<i;j++){
                Console.Write(u+"\t");
                u=u+B;
                s=s+u; 
            }
            Console.WriteLine();
        }
        for(int i=kolom-1;i>0;i--){ 
            for(int j=kolom+1;j>0+i;j--){
                Console.Write(u+"\t");
                u=u+B;
                s=s+u; 
            }
            Console.WriteLine();
        }
        s=s-u;
        Console.WriteLine("Jumlah Deret Aritmatikanya adalah "+ s);
    }
}