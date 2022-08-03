/*
Soal          : 3
Gambar        : A
Matrix kolom  : 6
*/

package main

import "fmt"

func main() {
	A := 6
	B := 3
	kolom := 5
	u := A
	s := B
	fmt.Println("Deret Aritmatikanya adalah")
	for i := kolom; i > 0; i-- {
		for j := 0; j < i; j++ {
			fmt.Print(u, "\t")
			u = u + B
			s = s + u
		}
		fmt.Println()
	}
	for i := kolom - 1; i > 0; i-- {
		for j := kolom + 1; j > 0+i; j-- {
			fmt.Print(u, "\t")
			u = u + B
			s = s + u
		}
		fmt.Println()
	}
	s = s - u
	fmt.Println("Jumlah Deret Aritmatikanya adalah", s)
}
