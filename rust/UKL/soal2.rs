/*
Soal    : 2
A       : 5
B       : 6
*/

fn main() {
    let a=5;
    let b=9;
    let mut u=a;
    let mut s=a;
    println!("Deret Aritmatikanya adalah");
    for _i in 0..5 {
        for _j in 0..6 {
            print!("{}\t", u);
            u=u+b;
            s=s+u;
        }
        println!();
    }
    s=s-u;
    println!("Jumlah Deret Aritmatikanya adalah {}", s);
}