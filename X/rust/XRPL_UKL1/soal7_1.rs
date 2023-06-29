use std::io::{self, Write};

fn biaya(kategori: &str, jalur: &str, bulan: i32) -> i32 {
    let (mut dsp, mut spp) = (0, 0);

    match jalur {
        "SBMPTN" => match kategori {
            "A" => {
                dsp = 5_000_000;
                spp = 500_000;
            }
            "B" => {
                dsp = 15_000_000;
                spp = 1_000_000;
            }
            "C" => {
                dsp = 30_000_000;
                spp = 2_000_000;
            }
            _ => {}
        },
        "SNMPTN" => match kategori {
            "A" => {
                dsp = 7_000_000;
                spp = 500_000;
            }
            "B" => {
                dsp = 17_000_000;
                spp = 1_000_000;
            }
            "C" => {
                dsp = 35_000_000;
                spp = 2_000_000;
            }
            _ => {}
        },
        "Mandiri" => match kategori {
            "A" => {
                dsp = 10_000_000;
                spp = 1_000_000;
            }
            "B" => {
                dsp = 25_000_000;
                spp = 2_000_000;
            }
            "C" => {
                dsp = 50_000_000;
                spp = 3_000_000;
            }
            _ => {}
        },
        _ => {}
    }

    dsp + spp * bulan
}

fn input_int(msg: &str) -> i32 {
    print!("{}", msg);
    io::stdout().flush().unwrap();

    let mut input = String::new();
    io::stdin().read_line(&mut input).unwrap();
    input.trim().parse().unwrap()
}

fn main() {
    let nama = ["Mira", "Nina", "Oemar", "Pena"];
    let jalur = ["SBMPTN", "SNMPTN", "Mandiri", "SBMPTN"];
    let alamat = ["Sawojajar", "Kedung Kandang", "Ijen", "Dinoyo"];

    let id: usize = (input_int("Masukkan id mahasiswa: ") - 1) as usize;
    if id >= nama.len() {
        println!("Invalid input");
        return;
    }

    let ortu = input_int("Masukkan pendapatan ortu: ");
    let bulan = input_int("Masukkan jumlah bulan spp: ");

    let kategori = if ortu > 10000000 {
        "C"
    } else if ortu >= 2000000 {
        "B"
    } else {
        "A"
    };

    println!(
        "\n\
        =================================\n\
        Id mahasiswa                    : {}\n\
        Nama mahasiswa                  : {}\n\
        \n\
        Jalur masuk                     : {}\n\
        Kategori pendapatan             : {}\n\
        Jumlah biaya                    : {}\n\
        Alamat                          : {}\n\
        =================================\n",
        id + 1,
        nama[id],
        jalur[id],
        kategori,
        biaya(kategori, jalur[id], bulan),
        alamat[id]
    );
}
