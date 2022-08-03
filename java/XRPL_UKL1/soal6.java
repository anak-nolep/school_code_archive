/*
Soal    : 6 / Soal array 2
A       : 3x2
B       : 2x3
fill    : 3x3
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
            {5, 9, 8}
        },
        fill[][]={
            {0,0,0},
            {0,0,0},
            {0,0,0}
        },
        kolom1=fill.length,
        kolom2=fill[0].length;
        System.out.println("Hasil AxB");

        for(int i=0;i<3;i++){
            for(int j=0;j<3;j++){ 
                for(int k=0;k<2;k++){ 
                    fill[i][j]=fill[i][j]+a[i][k]*b[k][j];
                }
            }
        }
        for(int i=0;i<3;i++){
            for(int j=0;j<3;j++){
                System.out.print(fill[i][j]+"\t");
            }
        System.out.println();
        }
    }
}