/*
Soal        : 7
Modelsoal   : 2
*/
const readline = require("readline");

const input = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

opsi_biaya = {
    "SBMPTN": {
        "A": { dsp: 5_000_000, spp: 500_000 },
        "B": { dsp: 15_000_000, spp: 1_000_000 },
        "C": { dsp: 3_000_0000, spp: 2_000_000 },
    },
    "SNMPTN": {
        "A": { dsp: 7_000_000, spp: 5_00000 },
        "B": { dsp: 17_000_000, spp: 1_000_000 },
        "C": { dsp: 35_000_000, spp: 2_000_000 },
    },
    "Mandiri": {
        "A": { dsp: 1_000_0000, spp: 1_000_000 },
        "B": { dsp: 25_000_000, spp: 2_000_000 },
        "C": { dsp: 5_000_0000, spp: 3_000_000 },
    },
};

function biaya(kategori, jalur, bulan) {
    total = 0;
    const options = opsi_biaya[jalur]?.[kategori];
    if (options) {
        var { dsp, spp } = options;
        total = dsp + spp * bulan;
    }
    return total;
}

nama = ["Mira", "Nina", "Oemar", "Pena"],
    jalur = ["SBMPTN", "SNMPTN", "Mandiri", "SBMPTN"],
    alamat = ["Sawojajar", "Kedung Kandang", "Ijen", "Dinoyo"],

    input.question("masukkan id mahasiswa       : ", function (id) {
        id = parseInt(id) - 1;
        if (id < 0 || id > nama.length) {
            console.log("Invalid input"); process.exit(0);
        }

        input.question("masukkan pendapat ortu      : ", function (ortu) {
            input.question("masukkan jumlah bulan spp   : ", function (bulan) {
                ortu = parseInt(ortu);
                bulan = parseInt(bulan);

                if (ortu > 1_000_0000) {
                    kategori = "C";
                }
                else if (ortu >= 2_000_000) {
                    kategori = "B";
                }
                else if (ortu <= 2_000_000) {
                    kategori = "A";
                }
                input.close();

                console.log(`
=================================
Id mahasiswa                    : ${id + 1}
Nama mahasiswa                  : ${nama[id]}

Jalur masuk                     : ${jalur[id]}
Kategori pemdapatan             : ${kategori}
Jumlah biaya                    : ${biaya(kategori, jalur[id], bulan)}
Alamat                          : ${alamat[id]}
=================================
`);
            });
        });
    });
