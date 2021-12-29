/*
Soal        : 7
Modelsoal   : 2
*/

package main

import "fmt"

func biaya(kategorii string, jalurr string, bulann int) int {
	dsp := 0
	spp := 0
	switch jalurr {
	case "SBMPTN":
		switch kategorii {
		case "A":
			dsp = 5000000
			spp = 500000
			break
		case "B":
			dsp = 15000000
			spp = 1000000
			break
		case "C":
			dsp = 30000000
			spp = 2000000
			break
		}
		break
	case "SNMPTN":
		switch kategorii {
		case "A":
			dsp = 7000000
			spp = 500000
			break
		case "B":
			dsp = 17000000
			spp = 1000000
			break
		case "C":
			dsp = 35000000
			spp = 2000000
			break
		}
		break
	case "Mandiri":
		switch kategorii {
		case "A":
			dsp = 10000000
			spp = 1000000
			break
		case "B":
			dsp = 25000000
			spp = 2000000
			break
		case "C":
			dsp = 50000000
			spp = 3000000
			break
		}
		break
	}
	return dsp + (spp * bulann)
}

func input_int(msg string) int {
	fmt.Print(msg)
	var out int
	fmt.Scanln(&out)
	return out
}

func main() {
	var kategori string
	nama := [4]string{"Mira", "Nina", "Oemar", "Pena"}
	jalur := [4]string{"SBMPTN", "SNMPTN", "Mandiri", "SBMPTN"}
	alamat := [4]string{"Sawojajar", "Kedung Kandang", "Ijen", "Dinoyo"}

	//id=1-1;
	id := input_int("masukkan id mahasiswa       : ") - 1
	if id < 0 || id > 3 {
		fmt.Println("Invalid input")
	}

	//ortu=100000;
	//bulan=10;
	ortu := input_int("masukkan pendapat ortu      : ")
	bulan := input_int("masukkan jumlah bulan spp   : ")
	if ortu > 10000000 {
		kategori = "C"
	} else if ortu >= 2000000 {
		kategori = "B"
	} else if ortu <= 2000000 {
		kategori = "A"
	}
	//format print
	fmt.Printf("\n%v\n%v%v\n%v%v\n\n%v%v\n%v%v\n%v%v\n%v%v\n%v\n",
		"=================================",
		"Id mahasiswa                    : ", (id + 1),
		"Nama mahasiswa                  : ", nama[id],
		"Jalur masuk                     : ", jalur[id],
		"Kategori pemdapatan             : ", kategori,
		"Jumlah biaya                    : ", biaya(kategori, jalur[id], bulan),
		"Alamat                          : ", alamat[id],
		"=================================",
	)
}
