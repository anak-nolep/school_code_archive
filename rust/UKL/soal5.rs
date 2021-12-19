/*
Soal    : 5/Soal Array no 1
A       : 3 (3x6 list)
B       : 6 (6x3 list)
*/

fn main() {
    let a =[
        [1 ,2 ,3 ,4 ,5 ,6 ],
        [7 ,8 ,9 ,5 ,1 ,2 ],
        [3 ,4 ,5 ,6 ,7 ,8 ]
    ];
    let b=[
        [1 ,2 ,3 ,4 ,5 ,6 ], 
        [7 ,8 ,9 ,5 ,1 ,2 ],
        [3 ,4 ,5 ,6 ,7 ,8 ]
    ];
    let x=3; //XYZ axis or something idk
    let y=6;
    println!("Hasil A - B ");
    for _i in 0..x {
        for _j in 0..y {
            print!("{}\t", (a[_i][_j]*b[_i][_j]));
        }
        println!();
    }
}
