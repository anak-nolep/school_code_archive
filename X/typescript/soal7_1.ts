/*
Soal        : 7
Modelsoal   : 2
*/
import readline from "readline";

const input = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
});

const opsi_biaya = {
  SBMPTN: {
    A: { dsp: 5_000_000, spp: 500_000 },
    B: { dsp: 15_000_000, spp: 1_000_000 },
    C: { dsp: 30_000_000, spp: 2_000_000 },
  },
  SNMPTN: {
    A: { dsp: 7_000_000, spp: 50_000 },
    B: { dsp: 17_000_000, spp: 1_000_000 },
    C: { dsp: 35_000_000, spp: 2_000_000 },
  },
  Mandiri: {
    A: { dsp: 10_000_000, spp: 1_000_000 },
    B: { dsp: 25_000_000, spp: 2_000_000 },
    C: { dsp: 50_000_000, spp: 3_000_000 },
  },
};

function biaya(kategori: string, jalur: string, bulan: number): number {
  let total = 0;
  const options = opsi_biaya[jalur]?.[kategori];
  if (options) {
    const { dsp, spp } = options;
    total = dsp + spp * bulan;
  }
  return total;
}

const nama = ["Mira", "Nina", "Oemar", "Pena"];
const jalur = ["SBMPTN", "SNMPTN", "Mandiri", "SBMPTN"];
const alamat = ["Sawojajar", "Kedung Kandang", "Ijen", "Dinoyo"];

input.question("masukkan id mahasiswa       : ", (id) => {
  const parsedId = parseInt(id) - 1;
  if (parsedId < 0 || parsedId >= nama.length) {
    console.log("Invalid input");
    process.exit(0);
  }

  input.question("masukkan pendapat ortu      : ", (ortu) => {
    input.question("masukkan jumlah bulan spp   : ", (bulan) => {
      const parsedOrtu = parseInt(ortu);
      const parsedBulan = parseInt(bulan);

      let kategori = "";
      if (parsedOrtu > 10_000_000) {
        kategori = "C";
      } else if (parsedOrtu >= 2_000_000) {
        kategori = "B";
      } else if (parsedOrtu <= 2_000_000) {
        kategori = "A";
      }
      input.close();

      console.log(`
=================================
Id mahasiswa                    : ${parsedId + 1}
Nama mahasiswa                  : ${nama[parsedId]}

Jalur masuk                     : ${jalur[parsedId]}
Kategori pemdapatan             : ${kategori}
Jumlah biaya                    : ${biaya(
        kategori,
        jalur[parsedId],
        parsedBulan
      )}
Alamat                          : ${alamat[parsedId]}
=================================
`);
    });
  });
});
