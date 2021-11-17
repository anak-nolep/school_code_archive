/*
Soal        : 1
A           : 5
B           : 9
Suku akhir  : 21
*/

A=5
B=9
suku_akhir=2,
u=A,
s=A;
console.log("Deret Aritmatikanya adalah"); 
for(i=0;i<suku_akhir;i++){                            
    console.log("Angka U awal = "+u+"\t");
    console.log("Angka S awal = "+s+"\t"); 
    u=u+B; 
    s=s+u;    
    console.log("Angka U akhir = "+u+"\t");
    console.log("Angka S akhir = "+s+"\t");  
}
console.log("S = s-u = " + s + " - " +u + " = "+ (s-u)); 
s=s-u;  
console.log("Jumlah Deret Aritmatikanya adalah "+s);