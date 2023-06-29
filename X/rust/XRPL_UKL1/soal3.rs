/*
Soal          : 3
Gambar        : A
Matrix kolom  : 6
*/

fn main() {
    let a = 5;
    let b = 3;
    let kolom = 6;
    let mut u = a;
    let mut s = b;
    println!("Deret Aritmatikanya adalah\n");
    for i in 0..kolom {
        for _ in 0..i + 1 {
            print!("{}\t", u);
            u += b;
            s += u;
        }
        println!();
    }
    let total = s - u;
    println!("Jumlah Deret Aritmatikanya adalah {}", total);
}
