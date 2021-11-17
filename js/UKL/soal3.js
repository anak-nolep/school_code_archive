/*
Soal          : 3
Gambar        : A
Matrix kolom  : 6
*/

a=5;
b=3,
kolom=6;
u=a;
s=b;
console.log("Deret Aritmatikanya adalah");

for(i=0;i<kolom;i++){                          
    for(j=1;j>0-i;j--){
        process.stdout.write(u+"\t"); 
        u=u+b; 
        s=s+u;                     
    }
    console.log(); 
}
s=s-u; 
console.log("Jumlah Deret Aritmatikanya adalah "+s);