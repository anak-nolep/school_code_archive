/*
Soal        : 7
Modelsoal   : 2
*/
#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int biaya(char kategorii[], char jalurr[], int bulann){
    int dsp=0,spp=0;
    if(strcmp(jalurr, "SBMPTN")==0){
        if(strcmp(kategorii, "A")==0){
            dsp = 5000000;
            spp = 500000;
        }
        else if(strcmp(kategorii, "B")==0){
            dsp = 15000000;
            spp = 1000000;
        }
        else if(strcmp(kategorii, "C")==0){
            dsp = 30000000;
            spp = 2000000;
        }         
    }
    else if(strcmp(jalurr, "SNMPTN")==0){
        if(strcmp(kategorii, "A")==0){
            dsp = 7000000;
            spp = 500000;
        }
        else if(strcmp(kategorii, "B")==0){
            dsp = 17000000;
            spp = 1000000;
        }
        else if(strcmp(kategorii, "C")==0){
            dsp = 35000000;
            spp = 2000000;
        }            
    }
    else if(strcmp(jalurr, "Mandiri")==0){
        if(strcmp(kategorii, "A")==0){
            dsp = 10000000;
            spp = 1000000;
        }
        else if(strcmp(kategorii, "B")==0){
            dsp = 25000000;
            spp = 2000000;
        }
        else if(strcmp(kategorii, "C")==0){
            dsp = 50000000;
            spp = 3000000;
        }
    }
    return dsp+(spp*bulann);
}

int input_int(char msg[]){
    int input;
    printf("%s", msg);
    scanf("%d", &input);
    return input;
}

int main(int argc, char *argv[]){
    int id,ortu,bulan;
    char    nama [4][15]={"Mira","Nina","Oemar","Pena"},
            jalur [4][15]={"SBMPTN","SNMPTN","Mandiri","SBMPTN"},
            alamat [4][15]={"Sawojajar","Kedung Kandang","Ijen","Dinoyo"};

    char    *kategori;

    //id=1-1;
    id=input_int("masukkan id mahasiswa       : ")-1;
    if(id<0 || id> 3){
        printf("Invalid input\n");exit(0);
    }

    //ortu=100000;
    //bulan=10;
    ortu=input_int("masukkan pendapat ortu      : ");
    bulan=input_int("masukkan jumlah bulan spp   : ");

    if (ortu >10000000){
        kategori = "C";
    }
    else if (ortu >=2000000){
        kategori = "B";
    }
    else if (ortu <=2000000){
        kategori = "A";
    }
    printf("\n"
        "=================================\n"
        "Id mahasiswa                    : %d\n"
        "Nama mahasiswa                  : %s\n"
        "\n"
        "Jalur masuk                     : %s\n"
        "Kategori pemdapatan             : %s\n"
        "Jumlah biaya                    : %d\n"
        "Alamat                          : %s\n"
        "=================================\n",
    id+1, nama[id], jalur[id],kategori,
    biaya(kategori,jalur[id],bulan), alamat[id]);
}
