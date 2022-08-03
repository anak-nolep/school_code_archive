/*
Soal    : 5/Soal Array no 1
A       : 3 (3x6 list)
B       : 6 (6x3 list)
*/

A = {
    0 : [1 ,2 ,3 ,4 ,5 ,6 ],
    1 : [7 ,8 ,9 ,5 ,1 ,2 ],
    2 : [3 ,4 ,5 ,6 ,7 ,8 ]
};
console.log(A[0][0])
B={
    0 : [1 ,2 ,3 ,4 ,5 ,6 ], 
    1 : [7 ,8 ,9 ,5 ,1 ,2 ],
    2 : [3 ,4 ,5 ,6 ,7 ,8 ]
};
X=3; //XYZ axis or something idk
Y=6;

console.log("\nHasil A - B\n"); 
for(i=0;i<X;i++){                    
  for(j=0;j<Y;j++){               
    process.stdout.write(A[i][j]*B[i][j]+"\t");                    
  }
  console.log();
}
