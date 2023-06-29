fn main() {
    const X: usize = 3;
    const Y: usize = 6;
    
    let a: [[i32; Y]; X] = [
        [1, 2, 3, 4, 5, 6],
        [7, 8, 9, 5, 1, 2],
        [3, 4, 5, 6, 7, 8],
    ];
    
    let b: [[i32; Y]; X] = [
        [1, 2, 3, 4, 5, 6],
        [7, 8, 9, 5, 1, 2],
        [3, 4, 5, 6, 7, 8],
    ];
    
    println!("Hasil A - B");
    
    for i in 0..X {
        for j in 0..Y {
            print!("{}\t", a[i][j] * b[i][j]);
        }
        println!();
    }
}
