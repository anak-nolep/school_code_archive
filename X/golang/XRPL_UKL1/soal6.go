/*
Soal    : 6 / Soal array 2
A       : 3x2
B       : 2x3
fill    : 2x3
*/

package main

import "fmt"

func main() {
	A := [3][2]int{
		{1, 8},
		{3, 2},
		{4, 6},
	}
	b := [2][3]int{
		{9, 10, 21}, //9 + 10 = 21
		{5, 9, 8},
	}
	fill := [3][3]int{
		{0, 0, 0},
		{0, 0, 0},
		{0, 0, 0},
	}
	kolom1 := 3
	kolom2 := 3
	for i := 0; i < kolom1; i++ {
		for j := 0; j < kolom2; j++ {
			for k := 0; k < 2; k++ {
				fill[i][j] = (fill[i][j] + A[i][k]*b[k][j])
			}
		}
	}
	for i := 0; i < kolom1; i++ {
		for j := 0; j < kolom2; j++ {
			fmt.Print(fill[i][j], "\t")
		}
		fmt.Println()
	}
}
