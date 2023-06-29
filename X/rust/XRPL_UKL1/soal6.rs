/*
Soal    : 6 / Soal array 2
A       : 3x2
B       : 2x3
fill    : 2x3
*/
fn main() {
    let col_a: [[i32; 2]; 3] = [
        [1, 8],
        [3, 2],
        [4, 6],
    ];
    
    let col_b: [[i32; 3]; 2] = [
        [9, 10, 21],
        [5, 9, 8],
    ];
    
    let mut col_fill: [[i32; 3]; 3] = [
        [0, 0, 0],
        [0, 0, 0],
        [0, 0, 0],
    ];
    
    let kolom1 = 3;
    let kolom2 = 3;
    
    for i in 0..kolom1 {
        for j in 0..kolom2 {
            for k in 0..2 {
                col_fill[i][j] += col_a[i][k] * col_b[k][j];
            }
        }
    }
    
    for i in 0..kolom1 {
        for j in 0..kolom2 {
            print!("{}\t", col_fill[i][j]);
        }
        println!();
    }
}
