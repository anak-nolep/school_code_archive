/*
Soal          : 4
Gambar        : B
Matrix kolom  : 5
*/

A=6;
B=3;
kolom=5;
u=A;
s=B;
console.log("Deret Aritmatikanya adalah");

for(i=kolom;i>0;i--){ 
    for(j=0;j<i;j++){
        process.stdout.write(u+"\t");
    u=u+B;
    s=s+u; 
    }
    console.log();
}

for(i=kolom-1;i>0;i--){ 
    for(j=kolom+1;j>0+i;j--){
        process.stdout.write(u+"\t");
        u=u+B;
        s=s+u;
    }
    console.log();
}

s=s-u;
console.log("Jumlah Deret Aritmatikanya adalah "+s);
