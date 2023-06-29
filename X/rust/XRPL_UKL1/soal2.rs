/*
Soal    : 2
a       : 5
b       : 6
*/

fn main() {
    let a = 5;
    let b = 9;
    let mut u = a;
    let mut s = a;
    println!("Deret aritmatikanya adalah");
    for _ in 0..5 {
        for _ in 0..6 {
            print!("{}\t", u);
            u += b;
            s += u;
        }
        println!();
    }
    let total = s - u;
    println!("Jumlah Deret aritmatikanya adalah {}", total);
}
