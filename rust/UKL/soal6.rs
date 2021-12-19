/*
Soal    : 6 / Soal array 2
A       : 3x2
B       : 2x3
fill    : 2x3
*/

fn main() {
    let a=[
        [1,8],
        [3,2],
        [4,6],
    ];
    let b=[
        [9,10,21], //9 + 10 = 21
        [5, 9, 8],
    ];
    let mut fill=[
        [0,0,0],
        [0,0,0],
        [0,0,0]
    ];
    let kolom1=3;
    let kolom2=3;
    for _i in 0..kolom1 {
        for _j in 0..kolom2 {
            for _k in 0..2 {
                fill[_i][_j]=fill[_i][_j]+a[_i][_k]*b[_k][_j];
            }
        }
    }
    for _i in 0..kolom1 {
        for _j in 0..kolom2 {
            print!("{}\t", fill[_i][_j]);
        }
        println!();
    }
}
