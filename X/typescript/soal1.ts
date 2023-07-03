/*
Soal        : 1
a           : 5
b           : 9
Suku akhir  : 21
*/

let a = 5,
  b = 9,
  suku_akhir = 2,
  u = a,
  s = a;

console.log("Deret aritmatikanya adalah");

for (let i = 0; i < suku_akhir; i++) {
  console.log("Angka U awal = " + u);
  console.log("Angka S awal = " + s);
  u += b;
  s += u;
  console.log("Angka U akhir = " + u);
  console.log("Angka S akhir = " + s);
}

console.log("S = s-u = " + s + " - " + u + " = " + (s - u));
let total = s - u;
console.log("Jumlah Deret aritmatikanya adalah " + s);
