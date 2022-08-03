/*
Soal        : 7
Modelsoal   : 2
*/

using System;

internal static class soal7_1{
    static int biaya(string kategori, string jalur, int bulan) {
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
    static int input(string msg){
        Console.Write(msg);
        return Convert.ToInt32(Console.ReadLine());
    }
    private static void Main(){
        int id,ortu,bulan;
        string[]    nama  = {"Mira","Nina","Oemar","Pena"};
        string[]    jalur = {"SBMPTN","SNMPTN","Mandiri","SBMPTN"};
        string[]    alamat= {"Sawojajar","Kedung Kandang","Ijen","Dinoyo"};

        string kategori="";

        id = input("masukkan id mahasiswa       : ")-1;
        //id=2-1;
        if(id<0 || id> nama.GetLength(0)){
            Console.WriteLine("Invalid input");
            Environment.Exit(0);
        }
        ortu = input("masukkan pendapat ortu      : ");
        bulan = input("masukkan jumlah bulan spp   : ");
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

        Console.WriteLine(
        "\n=================================\n" +
        "Id mahasiswa                    : "+(id+1)+"\n"+
        "Nama mahasiswa                  : "+nama[id]+"\n"+
        "\n" +
        "Jalur masuk                     : "+jalur[id]+"\n"+
        "Kategori pemdapatan             : "+kategori+"\n"+
        "Jumlah biaya                    : "+biaya(kategori,jalur[id],bulan)+"\n"+
        "Alamat                          : "+alamat[id]+"\n"+
        "=================================");
    }
}