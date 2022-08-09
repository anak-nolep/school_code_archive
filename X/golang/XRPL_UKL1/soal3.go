/*
Soal          : 3
Gambar        : A
Matrix kolom  : 6
*/

package main

import "fmt"

func main() {
	a := 5
	b := 3
	kolom := 6
	u := a
	s := b
	fmt.Println("Deret Aritmatikanya adalah")
	for i := 0; i < kolom; i++ {
		for j := 0; j < i+1; j++ {
			fmt.Print(u, "\t")
			u = u + b
			s = s + u
		}
		fmt.Println()
	}
	s = s - u
	fmt.Println("Jumlah Deret Aritmatikanya adalah", s)
}
