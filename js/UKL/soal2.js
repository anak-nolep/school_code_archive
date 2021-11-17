/*
Soal    : 2
A       : 5
B       : 6
*/

A=5;
B=9;
u=A; 
s=A; 

console.log("Deret Aritmatikanya adalah"); 

for(i=0;i<5;i++){                            
    for(j=0;j<6;j++){  
        process.stdout.write(u+"\t"); 
        u=u+B;
        s=s+u;
    }
    console.log(); 
}
s=s-u;
console.log("Jumlah Deret Aritmatikanya adalah "+s); 