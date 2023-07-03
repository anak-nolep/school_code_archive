/*
Soal          : 4
Gambar        : b
Matrix kolom  : 5
*/

a = 6;
b = 3;
kolom = 5;
u = a;
s = b;
console.log("Deret aritmatikanya adalah");

for (i = kolom; i > 0; i--) {
    for (j = 0; j < i; j++) {
        process.stdout.write(u + "\t");
        u += b;
        s += u;
    }
    console.log();
}

for (i = kolom - 1; i > 0; i--) {
    for (j = kolom + 1; j > 0 + i; j--) {
        process.stdout.write(u + "\t");
        u += b;
        s += u;
    }
    console.log();
}

total = s - u;
console.log("Jumlah deret aritmatikanya adalah " + total);
