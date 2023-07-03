/*
Soal        : 7
Modelsoal   : 0
*/
import * as readline from "readline";

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
});

function hitung(nilai: number): number {
  let bayar = 2000;
  if (nilai > 10) {
    bayar += 1000;
  }
  if (nilai > 20) {
    bayar += 1000;
  }
  if (nilai > 30) {
    bayar += 1000;
  }

  return nilai * bayar + 10000;
}

const namaPelanggan: string[] = ["Ali", "Budi", "Dani", "Edi", "Umar"];

function promptUser(): Promise<string> {
  return new Promise((resolve) => {
    rl.question("Masukkan jumlah pelanggan: ", (input) => {
      resolve(input);
    });
  });
}

async function main() {
  const idInput = await promptUser();
  let id = parseInt(idInput) - 1;

  if (id < 0 || id >= namaPelanggan.length) {
    console.log("ID pelanggan tidak valid!");
    rl.close();
    return;
  }

  const tagihanInput = await promptUser();
  const tagihan = parseInt(tagihanInput);

  if (isNaN(tagihan)) {
    console.log("Jumlah tagihan tidak valid!");
    rl.close();
    return;
  }

  const totalTagihan = hitung(tagihan);

  console.log(`
Print Out Tagihan
ID\t: ${id + 1}
Nama\t: ${namaPelanggan[id]}
Tagihan\t: Rp.${totalTagihan},-
`);

  rl.close();
}

main();
