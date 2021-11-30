/*
Soal        : 7
Modelsoal   : 0
*/

import java.util.Scanner;

public class soal7_0 {
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
 
    public static void main(String[] args) {
        Scanner inputt = new Scanner(System.in);
        int id, tagihan;
        String namaPelanggan[]={"Ali", "Budi", "Dani", "Edi", "Umar"};//nama pelanggan 
        
        System.out.println("Masukkan id pelanggan : 1");
        id = inputt.nextInt()-1;
        //id = 1-1;

        System.out.println("Masukkan jumlah tagihan : 17");
        tagihan = inputt.nextInt();
        //tagihan = 33;

        tagihan=hitung(tagihan);

        System.out.println(String.format(
            """
            Print Out Tagihan
            ID\t: %s
            Nama\t: %s
            Tagihan\t: Rp.%s,-
            """, 
            id+1, 
            namaPelanggan[id],
            tagihan));
    }
}