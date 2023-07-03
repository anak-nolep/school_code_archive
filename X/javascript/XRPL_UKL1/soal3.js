/*
Soal          : 3
Gambar        : A
Matrix kolom  : 6
*/

a = 5;
b = 3;
kolom = 6;
u = a;
s = b;
console.log("Deret aritmatikanya adalah");

for (i = 0; i < kolom; i++) {
    for (j = 0; j < i + 1; j++) {
        process.stdout.write(u + "\t");
        u += b;
        s += u;
    }
    console.log();
}
total = s - u;
console.log("Jumlah deret aritmatikanya adalah " + total);