/*
Soal        : 7
Modelsoal   : 0
*/

fn hitung(nilai: i32) -> i32 {
    let mut bayar=2000;
    if (nilai>10){
        bayar=bayar+1000;
    }
    if (nilai>20){
        bayar=bayar+1000;
    }
    if (nilai>30){
        bayar=bayar+1000;
    }
    bayar = nilai*bayar+10000;
    bayar
}

fn main() {
    let namaPelanggan = ["Ali", "Budi", "Dani", "Edi", "Umar"];
}
