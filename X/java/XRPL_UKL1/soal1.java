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
        System.out.println("Angka U awal = "+u);
        System.out.println("Angka S awal = "+s); 
        u+=B; 
        s+=u;    
        System.out.println("Angka U akhir = "+u);
        System.out.println("Angka S akhir = "+s);  
      }
      System.out.println("S = s-u = " + s + " - " +u + " = "+ (s-u)); 
      int total=s-u;  
      System.out.println("Jumlah Deret Aritmatikanya adalah "+total);
    }
}