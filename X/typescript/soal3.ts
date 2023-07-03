/*
Soal          : 3
Gambar        : A
Matrix kolom  : 6
*/

let a = 5,
  b = 3,
  kolom = 6;

let u = a,
  s = b;
console.log("Deret Aritmatikanya adalah");

for (let i = 0; i < kolom; i++) {
  for (let j = 0; j < i + 1; j++) {
    process.stdout.write(u + "\t");
    u += b;
    s += u;
  }
  console.log();
}

s = s - u;
console.log("Jumlah Deret Aritmatikanya adalah " + s);
