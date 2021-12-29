/*
Soal        : 1
A           : 5
B           : 9
Suku akhir  : 21
*/
using System;

internal static class soal1{
    private static void Main(){
        int A=5,
            B=9,
            suku_akhir=2,
            u=A,
            s=A;
        Console.WriteLine("Deret Aritmatikanya adalah");
        for(int i=0;i<suku_akhir;i++){
            Console.WriteLine("Angka U awal = " + u);
            Console.WriteLine("Angka S awal = " + s); 
            u=u+B;
            s=s+u;   
            Console.WriteLine("Angka U awal = " + u);
            Console.WriteLine("Angka S awal = " + s);
        }
        Console.WriteLine(String.Format("S = s - u = {0} - {1} = {2}", s, u, (s-u)));
        s=s-u;
        Console.WriteLine("Jumlah Deret Aritmatikanya adalah " + s);
    }
}
