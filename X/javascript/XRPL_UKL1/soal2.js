/*
Soal    : 2
a       : 5
b       : 6
*/

a = 5;
b = 9;
u = a;
s = a;

console.log("Deret aritmatikanya adalah");

for (i = 0; i < 5; i++) {
    for (j = 0; j < 6; j++) {
        process.stdout.write(u + "\t");
        u += b;
        s += u;
    }
    console.log();
}
total = s - u;
console.log("Jumlah deret aritmatikanya adalah " + s); 