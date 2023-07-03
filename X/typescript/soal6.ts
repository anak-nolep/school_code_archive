/*
Soal    : 6 / Soal array 2
A       : 3x2
B       : 2x3
fill    : 2x3
*/

let A = {
    0: [1, 8],
    1: [3, 2],
    2: [4, 6],
  },
  B = {
    0: [9, 10, 21],
    1: [5, 9, 8],
  },
  fill = {
    0: [0, 0, 0],
    1: [0, 0, 0],
    2: [0, 0, 0],
  },
  kolom1 = 3,
  kolom2 = 3;

console.log("Hasil AxB");

for (let i = 0; i < 3; i++) {
  for (let j = 0; j < 3; j++) {
    for (let k = 0; k < 2; k++) {
      fill[i][j] = fill[i][j] + A[i][k] * B[k][j];
    }
  }
}
for (let i = 0; i < 3; i++) {
  for (let j = 0; j < 3; j++) {
    process.stdout.write(fill[i][j] + "\t");
  }
  console.log();
}
