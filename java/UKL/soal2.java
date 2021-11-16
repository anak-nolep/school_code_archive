/*
Soal    : 2
A       : 5
B       : 6
*/

public class soal2 {
   public static void main(String[] args) {
        int A=5,
            B=9, 
            u=A, 
            s=A; 
        System.out.println("Deret Aritmatikanya adalah"); 
        for(int i=0;i<5;i++){                            
          for(int j=0;j<6;j++){  
            System.out.print(u+"\t"); 
            u=u+B;
            s=s+u;
          }
          System.out.println(); 
        }
        s=s-u;
        System.out.println("Jumlah Deret Aritmatikanya adalah "+s); 
    }
}

