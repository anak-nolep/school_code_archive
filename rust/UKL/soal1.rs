/*
Soal        : 1
A           : 5
B           : 9
Suku akhir  : 21
*/
fn main() {
    let a=5;
    let b=9;
    let suku_akhir=2;
    let mut u=a;
    let mut s=a;

    println!("Deret Aritmatikanya adalah");
    for _i in 0..suku_akhir {
        println!("Angka U awal = {}", u);
        println!("Angka S awal = {}", s); 
        u=u+b;
        s=s+u; 
        println!("Angka U awal = {}", u);
        println!("Angka S awal = {}", s); 
    }
    println!("S = s - u = {} - {} = {}", s, u, (s-u));
    s=s-u;
    println!("Jumlah Deret Aritmatikanya adalah {}", s);
}