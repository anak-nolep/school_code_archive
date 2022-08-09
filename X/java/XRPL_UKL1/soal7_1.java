/*
Soal        : 7
Modelsoal   : 2
*/

import java.util.Scanner;

public class soal7 {
    static Scanner input = new Scanner(System.in);
    
    static int biaya(String kategori , String jalur, int bulan){
        int dsp=0,spp=0;
        
        switch(jalur){
            case "SBMPTN":
                switch(kategori){
                    case "A":
                        dsp = 5000000;
                        spp = 500000;
                        break;
                    case "B":
                        dsp = 15000000;
                        spp = 1000000;
                        break;
                    case "C":
                        dsp = 30000000;
                        spp = 2000000;
                        break;
            } 
            break;
            case "SNMPTN":
                switch(kategori){
                    case "A":
                        dsp = 7000000;
                        spp = 500000;
                        break;
                    case "B":
                        dsp = 17000000;
                        spp = 1000000;
                        break;
                    case "C":
                        dsp = 35000000;
                        spp = 2000000;
                        break;
            }
            break;
            case "Mandiri":
                switch(kategori){
                    case "A":
                        dsp = 10000000;
                        spp = 1000000;
                        break;
                    case "B":
                        dsp = 25000000;
                        spp = 2000000;
                        break;
                    case "C":
                        dsp = 50000000;
                        spp = 3000000;
                        break;
            }
            break;
        }
        return (dsp+(spp*bulan));
    }
    
    static int inputint(String pesan){
        System.out.print(pesan);
        return input.nextInt();
    }
    
    public static void main(String[] args) {
        int id,ortu,bulan;
        String  nama []={"Mira","Nina","Oemar","Pena"},
                jalur []={"SBMPTN","SNMPTN","Mandiri","SBMPTN"},
                alamat []={"Sawojajar","Kedung Kandang","Ijen","Dinoyo"},
                kategori="";
        
        id = inputint("masukkan id mahasiswa       : ")-1;
        //id=2-1;
        if(id<0 || id>nama.length){
            System.out.println("Invalid input");System.exit(0);
        }
        ortu = inputint("masukkan pendapat ortu      : ");
        bulan = inputint("masukkan jumlah bulan spp   : ");
        //ortu=20000;
        //bulan=2

        if (ortu >10000000){
            kategori = "C";
        }
        else if (ortu >=2000000){
            kategori = "B";
        }
        else if (ortu <=2000000){
            kategori = "A";
        }
        
        System.out.println(String.format(
        """
        \n=================================
        Id mahasiswa                    : %s
        Nama mahasiswa                  : %s

        Jalur masuk                     : %s
        Kategori pemdapatan             : %s
        Jumlah biaya                    : %s
        Alamat                          : %s
        =================================
        """, id+1, nama[id], jalur[id], kategori, 
        biaya(kategori,jalur[id],bulan), alamat[id]));
    }
}

