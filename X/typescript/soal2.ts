/*
Soal    : 2
a       : 5
b       : 6
*/

let a = 5,
  b = 9;
let u = a,
  s = a;

console.log("Deret aritmatikanya adalah");

for (let i = 0; i < 5; i++) {
  for (let j = 0; j < 6; j++) {
    process.stdout.write(u + "\t");
    u += b;
    s += u;
  }
  console.log();
}

let total = s - u;
console.log("Jumlah deret aritmatikanya adalah " + s);
