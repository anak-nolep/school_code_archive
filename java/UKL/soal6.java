/*
Soal    : 6 / Soal array 2
A       : 3x2
B       : 2x3
fill    : 2x3
*/

public class soal6 {
  public static void main(String[] args) {   
    int a[][]={
            {1,8},
            {3,2},
            {4,6}
        },
        b[][]={
            {9,10,21}, //9 + 10 = 21
            {5,9,8}
        },
        fill[][]={
            {0,0},
            {0,0},
            {0,0}
        },
        kolom1=fill.length,     //3
        kolom2=fill[0].length;  //2

    for(int i=0;i<kolom1;i++){
        for(int j=0;j<kolom2;j++){        
            fill[i][j]=(fill[i][j]+a[i][j]*b[j][i]);
        }
    }
    for(int i=0;i<kolom1;i++){
        for(int j=0;j<kolom2;j++){
            System.out.print(fill[i][j]+"\t");
        } 
        System.out.println();
    }
    }
}

