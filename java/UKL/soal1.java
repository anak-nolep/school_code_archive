/*
Soal        : 1
A           : 5
B           : 9
Suku akhir  : 21
*/

public class soal1 {
   public static void main(String[] args) {
      int A=5,
          B=9,
          suku_akhir=2,
          u=A,
          s=A;
      System.out.println("Deret Aritmatikanya adalah"); 
      for(int i=0;i<suku_akhir;i++){                            
        System.out.println("Angka U awal = "+u+"\t");
        System.out.println("Angka S awal = "+s+"\t"); 
        u=u+B; 
        s=s+u;    
        System.out.println("Angka U akhir = "+u+"\t");
        System.out.println("Angka S akhir = "+s+"\t");  
      }
      System.out.println("S = s-u = " + s + " - " +u + " = "+ (s-u)); 
      s=s-u;  
      System.out.println("Jumlah Deret Aritmatikanya adalah "+s);
    }
}

