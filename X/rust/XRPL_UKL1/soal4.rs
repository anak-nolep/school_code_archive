/*
Soal          : 4
Gambar        : B
Matrix kolom  : 5
*/

fn main() {
    let a = 6;
    let b = 3;
    let kolom = 5;
    let mut u = a;
    let mut s = b;

    println!("Deret Aritmatikanya adalah");

    for i in (0..kolom).rev() {
        for _ in 0..=i {
            print!("{}\t", u);
            u += b;
            s += u;
        }
        println!();
    }

    for i in (1..kolom).rev() {
        for _ in 0..(kolom - i + 1) {
            print!("{}\t", u);
            u += b;
            s += u;
        }
        println!();
    }

    let total=s - u;
    println!("Jumlah Deret Aritmatikanya adalah {}", total);
}
