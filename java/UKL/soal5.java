/*
Soal    : 5/Soal Array no 1
A       : 3 (3x6 list)
B       : 6 (6x3 list)
*/

public class soal5 {
  public static void main(String[] args) { 
    int A[][]={
        {1 ,2 ,3 ,4 ,5 ,6 },
        {7 ,8 ,9 ,5 ,1 ,2 },
        {3 ,4 ,5 ,6 ,7 ,8 }
        },
        B[][]={
        {1 ,2 ,3 ,4 ,5 ,6 }, 
        {2 ,9 ,1 ,5 ,1 ,2 },
        {3 ,1 ,5 ,6 ,7 ,8 }
        },
        X=A.length, //XYZ axis or something idk
        Y=A[0].length;

    System.out.println("\nHasil A - B \n"); 
    for(int i=0;i<X;i++){                    
      for(int j=0;j<Y;j++){               
          System.out.print(A[i][j]-B[i][j]+"\t");                    
      } 
      System.out.println(); 
    }
  }
}

