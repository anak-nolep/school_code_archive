/*
Soal        : 7
Modelsoal   : 2
*/

#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int hitung(int nilai) {
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

int input_int(char msg[]){
    int input;
    printf("%s", msg);
    scanf("%d", &input);
    return input;
}
 
int main() {
    int id, tagihan;
    char    namaPelanggan[5][7]={"Ali", "Budi", "Dani", "Edi", "Umar"};//nama pelanggan 
    
    id = input_int("Masukkan jumlah pelanggan : ")-1;
    //printf("Masukkan id pelanggan : 1");
    //id = 1-1;

    tagihan = input_int("Masukkan jumlah tagihan : ");
    //printf("Masukkan jumlah tagihan : 33");
    //tagihan = 33;

    tagihan=hitung(tagihan);

    printf("\n"
        "Print Out Tagihan \n"
        "ID\t: %d \n"
        "Nama\t: %s\n"
        "Tagihan\t: Rp.%d,-\n"
        "\n",
        id+1, 
        namaPelanggan[id],
        tagihan);
}