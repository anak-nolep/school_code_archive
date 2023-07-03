/*
Soal          : 4
Gambar        : b
Matrix kolom  : 5
*/

let a = 6,
  b = 3,
  kolom = 5;

let u = a,
  s = b;
console.log("Deret aritmatikanya adalah");

for (let i = kolom; i > 0; i--) {
  for (let j = 0; j < i; j++) {
    process.stdout.write(u + "\t");
    u += b;
    s += u;
  }
  console.log();
}

for (let i = kolom - 1; i > 0; i--) {
  for (let j = kolom + 1; j > 0 + i; j--) {
    process.stdout.write(u + "\t");
    u += b;
    s += u;
  }
  console.log();
}

let total = s - u;
console.log("Jumlah deret aritmatikanya adalah " + total);
