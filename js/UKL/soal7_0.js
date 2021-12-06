/*
Soal        : 7
Modelsoal   : 0
*/
const readline = require("readline");

const input = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function hitung(nilai){
    bayar=2000;
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

namaPelanggan=["Ali", "Budi", "Dani", "Edi", "Umar"];//nama pelanggan 

input.question("Masukkan jumlah pelanggan : ", function(id) {
id=parseInt(id)-1;
//console.log("Masukkan jumlah pelanggan : 1");
//id = 1-1;

input.question("Masukkan jumlah pelanggan : ", function(tagihan) {
tagihan=parseInt(tagihan);
//console.log("Masukkan jumlah tagihan : 33");
//tagihan = 33;

tagihan=hitung(tagihan);

console.log(`
Print Out Tagihan
ID\t: ${id+1}
Nama\t: ${namaPelanggan[id]}
Tagihan\t: Rp.${tagihan},-
`)
input.close()
})})