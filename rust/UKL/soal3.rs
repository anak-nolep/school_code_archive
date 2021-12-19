/*
Soal          : 3
Gambar        : A
Matrix kolom  : 6
*/

fn main() {
    let a=5;
    let b=3;
    let kolom=6;
    let mut u=a;
    let mut s=a;
    println!("Deret Aritmatikanya adalah");
    for _i in 0..kolom {
        for _j in 0.._i+1 {
            print!("{}\t",u);
            u=u+b;
            s=s+u;
        }
        println!();
    }
    s=s-u;
    println!("Jumlah Deret Aritmatikanya adalah {}", s);
}
