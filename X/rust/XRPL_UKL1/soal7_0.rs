use std::io::{self, Write};

const NAMA_PELANGGAN: [&str; 5] = ["Ali", "Budi", "Dani", "Edi", "Umar"];
const MAX_PELANGGAN: usize = NAMA_PELANGGAN.len();

fn hitung(nilai: i32) -> i32 {
    let mut bayar = 2000;
    if nilai > 10 {
        bayar += 1000;
    }
    if nilai > 20 {
        bayar += 1000;
    }
    if nilai > 30 {
        bayar += 1000;
    }
    nilai * bayar + 10000
}

fn input_int(msg: &str) -> i32 {
    print!("{}", msg);
    io::stdout().flush().unwrap();

    let mut input = String::new();
    io::stdin().read_line(&mut input).unwrap();
    input.trim().parse().unwrap()
}

fn main() {
    let id = input_int("Masukkan jumlah pelanggan: ") - 1;
    if (id < 0) || (id >= MAX_PELANGGAN as i32) {
        println!("ID pelanggan tidak valid!");
        return;
    }

    let tagihan = input_int("Masukkan jumlah tagihan: ");
    if tagihan < 0 {
        println!("Jumlah tagihan tidak valid!");
        return;
    }

    let tagihan = hitung(tagihan);

    println!(
        "\nPrint Out Tagihan\n\
        ID\t: {}\n\
        Nama\t: {}\n\
        Tagihan\t: Rp.{},-\n",
        id + 1,
        NAMA_PELANGGAN[id as usize],
        tagihan
    );
}
