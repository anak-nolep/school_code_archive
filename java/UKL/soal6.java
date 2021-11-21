/*
Soal    : 6 / Soal array 2
A       : 3x2
B       : 2x3
fill    : 3x3
*/

public class soal6 {
  public static void main(String[] args) {   
     int a[][]={
        {1,2},
        {3,4},
        {5,6}
    },
    b[][]={
        {1,2,3},
        {5,6,7}
    },
    h[][]={
        {0,0,0},
        {0,0,0},
        {0,0,0}
    };
    System.out.println("Hasil AxB");

    for(int i=0;i<3;i++){
        for(int j=0;j<3;j++){ 
            for(int k=0;k<2;k++){ 
                h[i][j]=h[i][j]+a[i][k]*b[k][j];
            }
        }
    }
 
    for(int i=0;i<3;i++){
        for(int j=0;j<3;j++){
            System.out.print(h[i][j]+"\t");
        }
    System.out.println();
    }
}
}