/*
Soal        : 1
A           : 5
B           : 9
Suku akhir  : 21
*/
package main

import "fmt"

func main() {
	A := 5
	B := 9
	suku_akhir := 2
	u := A
	s := A

	fmt.Println("Deret Aritmatikanya adalah")
	for i := 0; i < suku_akhir; i++ {
		fmt.Println("Angka U awal =", u)
		fmt.Println("Angka S awal = ", s)
		u = u + B
		s = s + u
		fmt.Println("Angka U akhir = ", u)
		fmt.Println("Angka S akhir = ", s)
	}
	fmt.Println("S = s-u = ", s, " - ", u, " = ", (s - u))
	s = s - u
	fmt.Println("Jumlah Deret Aritmatikanya adalah ", s)
}
