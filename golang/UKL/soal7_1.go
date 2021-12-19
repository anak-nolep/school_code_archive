/*
Soal        : 7
Modelsoal   : 2
*/

package main

import "fmt"

func input_int(msg string) int {
	fmt.Print(msg)
	var out int
	fmt.Scanln(&out)
	return out
}

func main() {
	nama := [4]string{"Mira", "Nina", "Oemar", "Pena"}
	jalur := [4]string{"SBMPTN", "SNMPTN", "Mandiri", "SBMPTN"}
	alamat := [4]string{"Sawojajar", "Kedung Kandang", "Ijen", "Dinoyo"}

	//id=1-1;
	id := input_int("masukkan id mahasiswa       : ") - 1
	if id < 0 || id > 3 {
		printf("Invalid input\n")
		exit(0)
	}

	//ortu=100000;
	//bulan=10;
	ortu = input_int("masukkan pendapat ortu      : ")
	bulan = input_int("masukkan jumlah bulan spp   : ")
	if ortu > 10000000 {
		kategori = "C"
	} else if ortu >= 2000000 {
		kategori = "B"
	} else if ortu <= 2000000 {
		kategori = "A"
	}
	//format print
}
