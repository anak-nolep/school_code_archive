/*
Soal        : 7
Modelsoal   : 2
*/
const readline = require("readline");

const input = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function biaya(kategori, jalur, bulan){
    dsp=0,spp=0;
    switch(jalur){
        case "SBMPTN":
            switch(kategori){
                case "A":
                    dsp = 5000000;
                    spp = 500000;
                    break;
                case "B":
                    dsp = 15000000;
                    spp = 1000000;
                    break;
                case "C":
                    dsp = 30000000;
                    spp = 2000000;
                    break;
        } 
        break;
        case "SNMPTN":
            switch(kategori){
                case "A":
                    dsp = 7000000;
                    spp = 500000;
                    break;
                case "B":
                    dsp = 17000000;
                    spp = 1000000;
                    break;
                case "C":
                    dsp = 35000000;
                    spp = 2000000;
                    break;
        }
        break;
        case "Mandiri":
            switch(kategori){
                case "A":
                    dsp = 10000000;
                    spp = 1000000;
                    break;
                case "B":
                    dsp = 25000000;
                    spp = 2000000;
                    break;
                case "C":
                    dsp = 50000000;
                    spp = 3000000;
                    break;
        }
        break;
    }
    return (dsp+(spp*bulan));
}

nama=["Mira","Nina","Oemar","Pena"],
jalur=["SBMPTN","SNMPTN","Mandiri","SBMPTN"],
alamat=["Sawojajar","Kedung Kandang","Ijen","Dinoyo"],

input.question("masukkan id mahasiswa       : ", function(id) {
id=parseInt(id)-1
if(id<0 || id>nama.length){
    console.log("Invalid input");process.exit(0);
}

input.question("masukkan pendapat ortu      : ", function(ortu) {
input.question("masukkan jumlah bulan spp   : ", function(bulan) {
ortu=parseInt(ortu)
bulan=parseInt(bulan)

if (ortu >10000000){
    kategori = "C";
}
else if (ortu >=2000000){
    kategori = "B";
}
else if (ortu <=2000000){
    kategori = "A";
}
input.close();

console.log(`
=================================
Id mahasiswa                    : ${id+1}
Nama mahasiswa                  : ${nama[id]}

Jalur masuk                     : ${jalur[id]}
Kategori pemdapatan             : ${kategori}
Jumlah biaya                    : ${biaya(kategori,jalur[id],bulan)}
Alamat                          : ${alamat[id]}
=================================
`)
});});});
