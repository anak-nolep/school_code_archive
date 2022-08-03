/*
Soal    : 2
A       : 5
B       : 6
*/

package main

import "fmt"

func main() {
	A := 5
	B := 9
	u := A
	s := A
	fmt.Println("Deret Aritmatikanya adalah")
	for i := 0; i < 5; i++ {
		for j := 0; j < 6; j++ {
			fmt.Print(u, "\t")
			u = u + B
			s = s + u
		}
		fmt.Println()
	}
	s = s - u
	fmt.Println("Jumlah Deret Aritmatikanya adalah ", s)
}
