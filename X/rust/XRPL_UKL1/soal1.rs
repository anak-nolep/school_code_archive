/*
Soal        : 1
a           : 5
b           : 9
Suku akhir  : 21
*/

fn main(){
    let a=5;
    let b=9;
    let suku_akhir=2;
    let mut u=a;
    let mut s=a;
    println!("Deret aritmatikanya adalah");
    for _ in 0..suku_akhir{
        println!("Angka U awal = {}", u);
        println!("Angka S awal = {}", s); 
        u+=b;
        s+=u;   
        println!("Angka U awal = {}", u);
        println!("Angka S awal = {}", s); 
    }
    println!("S = s - u = {} - {} = {}", s, u, (s-u));
    let total=s-u;
    println!("Jumlah Deret aritmatikanya adalah {}", total);
}
