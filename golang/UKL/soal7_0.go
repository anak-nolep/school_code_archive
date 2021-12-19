/*
Soal        : 7
Modelsoal   : 0
*/

//namaPelanggan := [5]string{"Ali", "Budi", "Dani", "Edi", "Umar"} //nama pelanggan

package main

import "fmt"

func hitung(nilai int) int {
	bayar := 2000
	if nilai > 10 {
		bayar = bayar + 1000
	}
	if nilai > 20 {
		bayar = bayar + 1000
	}
	if nilai > 30 {
		bayar = bayar + 1000
	}

	return nilai*bayar + 10000
}

func input_int(msg string) int {
	fmt.Print(msg)
	var out int
	fmt.Scanln(&out)
	return out
}

func main() {
	namaPelanggan := [5]string{"Ali", "Budi", "Dani", "Edi", "Umar"}
	id := input_int("Masukkan jumlah pelanggan : ") - 1
	//println("Masukkan id pelanggan : 1");
	//id = 1-1;

	tagihan := input_int("Masukkan jumlah tagihan : ")
	//println("Masukkan jumlah tagihan : 33");
	//tagihan = 33;

	tagihan = hitung(tagihan)
	fmt.Println(id, namaPelanggan[0])
	//format print
}
