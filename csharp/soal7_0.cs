/*
Soal        : 7
Modelsoal   : 2
*/

using System;

internal static class soal7_0{
    static int hitung(int nilai) {
        int bayar=2000;
        if (nilai>10){
            bayar=bayar+1000;
        }
        if (nilai>20){
            bayar=bayar+1000;
        }
        if (nilai>30){
            bayar=bayar+1000;
        }
        return nilai*bayar+10000;
    }
    private static void Main(){
        int id, tagihan;
        string[] namaPelanggan={"Ali", "Budi", "Dani", "Edi", "Umar"};//nama pelanggan
        Console.Write("Masukkan jumlah pelanggan : ");
        id = Convert.ToInt32(Console.ReadLine())-1;
        //Console.Write("Masukkan id pelanggan : 1");
        //id = 1-1;

        Console.Write("Masukkan jumlah tagihan : ");
        tagihan = Convert.ToInt32(Console.ReadLine());
        //Console.Write("Masukkan jumlah tagihan : 33");
        //tagihan = 33;
        
        tagihan=hitung(tagihan);
        Console.Write("\n"+
            "Print Out Tagihan\n" +
            "ID\t: "+(id+1)+"\n" +
            "Nama\t: "+namaPelanggan[id]+"\n" +
            "Tagihan\t: Rp."+tagihan+",-\n");
    }
}