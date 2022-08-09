/*
Soal    : 5/Soal Array no 1
A       : 3 (3x6 list)
B       : 6 (6x3 list)
*/

package main

import "fmt"

func main() {
	A := [3][6]int{
		{1, 2, 3, 4, 5, 6},
		{7, 8, 9, 5, 1, 2},
		{3, 4, 5, 6, 7, 8},
	}
	B := [3][6]int{
		{1, 2, 3, 4, 5, 6},
		{7, 8, 9, 5, 1, 2},
		{3, 4, 5, 6, 7, 8},
	}
	X := 3 //XYZ axis or something idk
	Y := 6
	fmt.Println("Hasil A - B")
	for i := 0; i < X; i++ {
		for j := 0; j < Y; j++ {
			fmt.Print((A[i][j] * B[i][j]), "\t")
		}
		fmt.Println()
	}
}
